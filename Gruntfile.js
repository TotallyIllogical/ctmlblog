
module.exports = function(grunt) {

    // CONFIGURE GRUNT 
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            development: {
                options:{
                    style: 'compressed',
                    compass: true,
                    sourcemap: false
                },
                files: {
                   'style/style.css': [ 'style/style.scss' ]
                }
            }
        },
        watch: {
            sass: {
                files: 'style/*.scss',
                tasks: ['sass'],
                option: {
                    livereload: true,
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

};
