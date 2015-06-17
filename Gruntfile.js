/*

    Grunt installation:
    -------------------
    npm install -g grunt-cli
    npm install -g grunt-init
    npm init (creates a `package.json` file)

    Simple Dependency Install:
    --------------------------
    npm install (from the same root directory as the `package.json` file

    Tasks:
    --------------------------
    grunt (default is to watch both sass and coffeescript files)
    grunt sass (compile once)
    grunt watch (you can also explicitly call the watch task)

    All commands are detailed by running the following:
    --------------------------
    grunt --help

*/

module.exports = function(grunt) {

  // Load grunt modules =======================/

  require('load-grunt-tasks')(grunt);

  // CONFIG ===================================/

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    // clean dist folder

    clean : {
      dist : {
        src : [ 'dist' ]
      }
    },

    // copy stuff

    copy : {
      php : {
        expand : true,
        cwd : 'app/',
        src : [ '*.php', '*.html' ],
        dest : 'dist/',
      },
      img : {
        expand : true,
        cwd : 'app/img/',
        src : [ '**/**' ],
        dest : 'dist/img',
      },
      fonts : {
        expand : true,
        cwd : 'app/fonts/',
        src : [ '**/**' ],
        dest : 'dist/fonts',
      },
      plugins : {
        expand : true,
        cwd : 'bower_components/',
        src : [ ],                                   // specify plugin files here
        dest : 'app/vendors',
      },
      shiv : {
        expand: true, 
        cwd : 'bower_components/',
        src : [ 'html5shiv/dist/html5shiv.min.js' ], // specify plugin files here
        dest : 'dist/scripts/',
        flatten: true
      }
    },

    // Compile Sass to css

    sass: {                                       // Task
      dev: {                                      // Target
        options: {                                // Target options
          style: 'expanded'
        },
        files: {                                  // Dictionary of files
          'dist/css/styles.css'   : 'app/scss/main.scss',     // 'destination' : 'source'
          'dist/css/ie.css'       : 'app/scss/ie.scss',
          'dist/css/themes/*.css' : 'app/scss/themes/*.scss'
        }
      },
      prod: {                                     // Target
        options: {                                // Target options
          style: 'compressed'
        },
        files: {                                  // Dictionary of files
          'dist/css/styles.css'   : 'app/scss/main.scss',     // 'destination' : 'source'
          'dist/css/ie.css'       : 'app/scss/ie.scss',
          'dist/css/themes/*.css' : 'app/scss/themes/*.scss'
        }
      }
    },

    // autoprefix css

    autoprefixer : {
      options : {
        // specifying browser cause it to fail :
        // https://www.bountysource.com/issues/8084317-file-not-being-output // should be fixed
        browsers : [ 'last 4 versions', 'ie 8', 'ie 9',
            'android 2.3', 'android 4', 'opera 12' ],
        map : false
        // remove : false
      },
      files : {
        // Target-specific file lists and/or options go here.
        src : 'dist/css/*.css'
      }
    },

    // Concatenate our js files

    concat : {
      main : {
        src : [ 'app/js/*.js' ], // All JS in the js folder
        dest : 'dist/scripts/main.js'
      },
      dist : {
        src : [ 'app/vendors/**/*.js' ], // All JS in the vendor folder
        dest : 'dist/scripts/plugins.js'
      }
    },

    // Minify js : prod task

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      dist: {
        files: {
          'dist/scripts/plugins.js'  : 'dist/scripts/plugins.js',
          'dist/scripts/main.js'     : 'dist/scripts/main.js'
        }
      }
    },

    // notify cross-OS

    notify : {
      sass : {
        options : {
          title : 'Grunt, grunt!',
          message : 'SCSS is all gravy'
        }
      },
      concat : {
        options : {
          title : 'Grunt, grunt!',
          message : 'JS is all good'
        }
      },
      prod : {
        options : {
          title : 'Grunt, grunt!',
          message : 'Ready for production \\o/'
        }
      },
    },


   // configure file watching --> grunt watch

    watch: {
      scripts: {
        files: ['app/js/**/*.js'],
        tasks: [ 'concat', 'notify:concat' ],
        options: {
            spawn: false,
            livereload: true
        },
      },
      css: {
        files: ['app/scss/**/*.scss'],
        tasks: ['sass:dev', 'autoprefixer', 'notify:sass'],
        options: {
            spawn: false,
            livereload: true
        }
      },
      php: {
        files: ['app/*.php', 'app/*.html'],
        tasks: ['copy:php'],
        options: {
            spawn: false,
            livereload: true
        }
      }
    },

    // configure image optimization --> grunt imagemin

    imagemin: {
      dynamic: {
        files: [{
            expand: true,
            cwd: 'app/img/',
            src: ['**/*.{png,jpg,gif}'],
            dest: 'dist/img/'
        }]
      }
    },

    // php task

    php: {
      dist: {
        options: {
            hostname: '127.0.0.1',
            port: 9000,
            base: 'dist', // Project root
            //keepalive: false,
            open: true
        }
      }
    }

  });


  // TASKS =====================================/

  grunt.registerTask( 'build', [ 'imagemin','sass:prod', 'autoprefixer' ] ); // optimize images, compress css
  grunt.registerTask( 'default', [ 'clean', 'copy', 'sass:dev', 'concat', 'autoprefixer', 'php:dist', 'watch', 'notify' ]);
  // prod task -> add imagemin ?
  grunt.registerTask( 'prod', [ 'clean', 'copy', 'sass:prod', 'autoprefixer', 'concat', 'uglify', 'notify:prod' ]);

};

/*
    Notes:

    When registering a new Task we can also pass in any other registered Tasks.
    e.g. grunt.registerTask('release', 'default requirejs'); 
    // when running this task we also run the 'default' Task

    We don't do this above as we would end up running `sass:dev` when we only want to run `sass:dist`
    We could do it and `sass:dist` would run afterwards, but that means we're compiling 
    sass twice which (although in our example quick) is extra compiling time.

    To run specific sub tasks then use a colon, like so...
    grunt sass:dev
    grunt sass:dist

*/
