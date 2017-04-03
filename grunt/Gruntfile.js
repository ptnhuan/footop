

module.exports = function (grunt) {


// Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    'css/styles.css': [
                        'less/**/*.less',
                        'bootstrap/less/bootstrap.less'
                    ]
                }
            }
        },
        cssmin: {
            dist: {files: [
                    {src: 'css/styles.css', dest: 'css/styles.css'}
                ]
            }
        }, uncss: {
            dist: {
                files: [
                    {src: 'demo.html', dest: 'css/styles.css'}
                ]
            },
        }, uglify: {
            nenjs: {
                src: 'js/script.js',
                dest: 'js/script.min.js',
            }
        },
        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: [{
                        expand: true,
                        src: ["demo.html"/*,"demo_1.html","demo_2.html"*/]

                    }],
                dev:{
                    src: ["demo.html"/*,"demo_1.html","demo_2.html"*/]
                }
            }
        },
        

        concat: {
            gopjs: {
                src: [
                    'bootstrap/js/affix.js',
                    'bootstrap/js/alert.js',
                    'bootstrap/js/button.js',
                    'bootstrap/js/carousel.js',
                    'bootstrap/js/callapse.js',
                    'bootstrap/js/dropdown.js',
                    'bootstrap/js/modal.js',
                    'bootstrap/js/popover.js',
                    'bootstrap/js/scrollspy.js',
                    'bootstrap/js/tab.js',
                    'bootstrap/js/tooltip.js',
                    'bootstrap/js/transition.js'
                ],
                dest: 'js/script.js'
            },
//            gophtml:{
//                src: [
//                    'demo.html',
//                    'demo_1.html',
//                    'demo_2.html'
//                ],
//                dest: 'min.html'
//            }
        },
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 5
                },
                files: [{
                        expand: true,
                        cwd: "images/",
                        src: ["**/*.{png,jpg,gif}"],
                        dest: "imgmin/"
                    }]
            }
        },
        watch: {
            less: {
                files: ['less/*.less'],
                task: ['less', 'cssmin','uncss']
            },
            htmlmin: {
                files: ['demo.html'],
                task: ['htmlmin']
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                }
            },
            imageopti: {
                files: ['images/*.*'],
                tasks: ['imagemin']
            }
        }
    });
// Register the default tasks.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks("grunt-uncss");
    grunt.loadNpmTasks("grunt-contrib-htmlmin");
    grunt.loadNpmTasks("grunt-contrib-imagemin");
    grunt.registerTask('default', ['imagemin', 'less', 'uncss', 'cssmin', 'htmlmin', 'concat', 'uglify', 'watch']);
};