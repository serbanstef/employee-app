module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt);

    // Project configuration.
    grunt.initConfig({
        compress: {
            main: {
                options: {
                    archive: 'employeeservice.zip',
                    pretty: true
                },
                expand: true,
                cwd: './',
                src: ['Employee.php', 'service.php','employees-rest-api.php', 'manifest.json', 'start.sh', 'timer.sh'],
                dest: './'
            }
        }
    });
    // Default task(s).
    grunt.registerTask('default', ['compress']);
};