module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'})
        ],
        dist: {
          src: 'css/custom_css.css'
        }
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded',
          require: 'susy'
        },
        files: {
          'style.css' : 'sass/style.scss'
        }
      }
    },
    watch: {
      options: {
        livereload: true
      },
      css: {
        files: 'sass/*.scss',
        tasks: ['sass'],
        options: {
          interrupt: true
        }
      },
      reload: {
        files: [
          "*.php",
          "js/*.js",
          "css/*.scss"
        ]
      },
      post: {
        files: 'style.css',
        tasks: ['postcss']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('dev', ['sass', 'postcss', 'watch']);
  grunt.registerTask('build', ['concat', 'uglify', 'sass', 'postcss']);

};