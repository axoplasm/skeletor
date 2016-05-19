module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: ['sass/**/*.{scss,sass}','sass/_partials/**/*.{scss,sass}'],
				tasks: ['sass:dist']
			},
			livereload: {
				files: ['*.html', '*.php', 'js/**/*.{js,json}', 'css/*.css','img/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			}
		},
		sass: {
			options: {
				sourceMap: true,
				outputStyle: 'expanded',
        includePaths: [
					'node_modules/susy/sass',
					'node_modules/breakpoint-sass/stylesheets',
					'node_modules/compass-mixins/lib'
				]
			},
			dist: {
				files: {
					'css/screen.css': 'sass/screen.scss'
				}
			}
		}
	});


	// plugins
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');


	// Default task(s).
	grunt.registerTask('default', ['sass:dist', 'watch']); // functionally the same as running $ grunt watch or $ grunt default

};
