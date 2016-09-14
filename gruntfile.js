module.exports = function(grunt) {

  // Configure tasks
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: 'dev/js/*.js',
        dest: 'build/js/script.min.js'
      },
      dev: {
        options: {
          beautify: true,
          mangle: false,
          compress: false,
          preserveComments: 'all'
        },
        src: 'dev/js/*.js',
        dest: 'build/js/script.min.js'
      }
    },
    watch : {
      js: {
        files: ['dev/js/*.js'],
        tasks: ['uglify:dev']
      },
      css: {
        files: ['dev/scss/**/*.scss'],
        tasks: ['sass:dev']
      }
    },
    sass: {
      dev: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'build/css/build.css' : 'dev/scss/application.scss'
        }
      },
      build: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'build/css/build.css' : 'dev/scss/application.scss'
        }
      }
    }
  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');

  // Register task(s)
  grunt.registerTask('default', ['uglify:dev','sass:dev']);
  grunt.registerTask('build', ['uglify:build','sass:build']);

};
