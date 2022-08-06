var shell = require('shelljs');
const log = require('log-to-file');
const constants =  require('./../../constants');
const helpers = require('./../../helpers/helpers');

exports.processQueue = (queue = null) => {
    if (queue == null) {
        shell.exec(`php ./../artisan queue:work --tries=1 --once --timeout=3500`, (code, output) => {
            // shelljs.echo(`exit code ${code} output is ${output}`);
            console.log('\nJob Working');
            console.log('output=====>'+output+'\n');
            log('==============START====================\n',constants.FEED_JOB_LOG_FILE_PATH);
            log(output,constants.FEED_JOB_LOG_FILE_PATH);
            log('==============END====================\n\n',constants.FEED_JOB_LOG_FILE_PATH);
            this.processQueue();
        });
    } else {
        shell.exec(`php ./../artisan queue:work --tries=1 --once --timeout=3500`, (code, output) => {
            log('==============START====================\n',constants.FEED_JOB_LOG_FILE_PATH);
            log(output, constants.FEED_JOB_LOG_FILE_PATH);
            log('===============END===================\n\n',constants.FEED_JOB_LOG_FILE_PATH);
            this.processQueue(queue_name);
        });

    }
};