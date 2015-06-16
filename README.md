# Sass-7-1 Webapp starter
# 7-1 Architecture for your Sass [(not SASS)](http://sassnotsass.com) project.
### Using Sass, Grunt & Bower.
**Originally forked from [Mina Markham Sassy Starter](http://minamarkham.github.io/sassy-starter/)**  
*v.0.5*

A starter toolkit based on [Scalable and Modular Architecture for CSS](http://smacss.com/) (SMACSS) for [Sass](http://sass-lang.com/) (SCSS) projects.
It's been adapted following [Hugo Giraudel 7-1 Architecture](http://sass-guidelin.es).
Also added, a [php server](https://github.com/sindresorhus/grunt-php) if you need a php API.

### It is mostly for my personnal use but I'd be glad to see comments / recomandations or improvements to this project.

Styles are broken down into the following groups: **Base, Layout, Components (Modules), Pages, Themes, Utilities**

## Documentation

See [SassDoc](http://minamarkham.github.io/sassy-starter/docs).

*note : the documentation has not been modified yet; it refers to the original project.*

## Quick start

1. Fork & clone the git repo, or download zip file directly.
2. Install Sass 3.3 – `gem install sass`.
3. Watch for changes - `sass --watch sass_dir:css_dir`.

## Directory structure - for reference / adapt it to your needs :)

```
  
scss/
|
|– base/
|   |– _reset.scss       # Reset/normalize
|   |– _typography.scss  # Typography rules
|   ...                  # Etc…
|
|– components/
|   |– _buttons.scss     # Buttons
|   |– _carousel.scss    # Carousel
|   |– _icons.scss       # Icons font
|   |– _dropdown.scss    # Dropdown
|   ...                  # Etc…
|
|– layout/
|   |– _navigation.scss  # Navigation
|   |– _grid.scss        # Grid system
|   |– _header.scss      # Header
|   |– _footer.scss      # Footer
|   |– _sidebar.scss     # Sidebar
|   |– _forms.scss       # Forms
|   ...                  # Etc…
|
|– pages/
|   |– _home.scss        # Home specific styles
|   |– _contact.scss     # Contact specific styles
|   ...                  # Etc…
|
|– themes/
|   |– _theme.scss       # Default theme
|   |– _admin.scss       # Admin theme
|   ...                  # Etc…
|
|– utils/
|   |– _variables.scss   # Sass Variables
|   |– _functions.scss   # Sass Functions
|   |– _mixins.scss      # Sass Mixins
|   |– _helpers.scss     # Class & placeholders helpers
|   |– _print.scss 	     # Print styles
|
|– vendors/
|   |– _bootstrap.scss   # Bootstrap
|   |– _jquery-ui.scss   # jQuery UI
|   ...                  # Etc…
|
|
`– main.scss             # Main Sass file
  |
  + .htaccess               # Apache server configs
  + config.rb               # Compass configuration file
  + crossdomain.xml         # cross-domain requests
  + docs/                   # SassDoc generated documentation
  + deploy.rb               # Capistrano configuration file
  + Gruntfile.js            # Grunt configuration & tasks
  + package.json            # Grunt metadata & dependencies
```

## The Gruntfile

run grunt to compile & launch the server / watch task.

run grunt prod to minify and uglify your code.

## TO DO
- change the way the javascript is added
- improve bower components links
- refactor some stylesheets (layout/components)
- make a yeoman generator / node package ?

## Resources


- [Scalable and Modular Architecture for CSS](http://smacss.com/book) (<abbr title="Scalable and Modular Architecture for CSS">SMACSS</abbr>)
- [Sass Guidelines](http://sass-guidelin.es/#the-7-1-pattern)
- [Original Sassy Starter](https://github.com/minamarkham/sassy-starter)
- 