/*grunt.initConfig({
	less: {
	  development: {
	    options: {
	      paths: ["css"]
	    },
	    files: {
	      "css/result.css": "less/styles.less"
	    }
	  },
	  production: {
	    options: {
	      paths: ["css"],
	      plugins: [
	        new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
	        new (require('less-plugin-clean-css'))(cleanCssOptions)
	      ],
	    },
	    files: {
	      "css/result.css": "less/styles.less"
	    }
	  }
	}
})*/

module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "css/styles3.css": "less/styles.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        files: ['less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

};