module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'expanded',
                    sourcemap: true
                },
                files: {
                    'style.css': 'sass/style.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'ie 8', 'ie 9'],
                map: true
            },
            multiple_files: {
                expand: true,
                flatten: true,
                src: 'style.css',
                dest: './'
            }
        },

		uglify: {
			my_target: {
				options: {
					sourceMap: true,
					sourceMapName: 'js/questis-scripts.js.map'
				},
				files: {
					'js/questis-scripts.min.js': ['js/questis/*.js']
				}
			}
		},

        imagemin: {
            dynamic: {
				options: {
					optimizationLevel: 7,
					cache: false
				},
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['*.{png,jpg,gif}'],
                    dest: 'images/build/'
                }]
            }
        },

        jshint: {
            src: ['js/questis/*.js','js/questis/**/*.js']
        },

        watch: {
            images: {
                files: ['images/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
                tasks: ['imagemin'],
                options: {
                    spawn: false
                }
            },
            js: {
                files: ['js/questis/*.js'],
                tasks: ['uglify']
//                options: {
//                    spawn: false
//                }
            },
            css: {
                files: ['sass/*.scss', 'sass/**/*.scss'],
                tasks: ['sass','autoprefixer'],
                sourceComments: 'normal',
                options: {
                    spawn: false
                }
            },
			livereload: {
				files: ['style.css'],
				options: {
					livereload: true,
					sourceMap: true
				}
			}
        },

        connect: {
            server: {
                options: {
                    port: 8000,
                    base: './'
                }
            }
        }
    });

    require('load-grunt-tasks')(grunt);
    
    grunt.registerTask('default', ['sass','autoprefixer','imagemin','uglify']);
    
    grunt.registerTask('dev', ['connect','watch','imagemin','uglify']);

    grunt.registerTask('production', ['sass','autoprefixer','imagemin']);

}