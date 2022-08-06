// require('dotenv').config();
var shell = require('shelljs');
const processQueue = require('./app/controllers/JobsController');

var http = require('http');
var https = require('https');
var server = null;

if (process.env.ENVIRONMENT == 'local') {
    server = http.createServer(function (req, res) {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        console.log('server listenning on port:' + process.env.PORT_LISTEN);
        console.log(req.url);
        res.end('Hello World!');
    }).listen(process.env.PORT_LISTEN);
} else {
    server = https.createServer(function (req, res) {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        console.log('server listenning on port:' + process.env.PORT_LISTEN);
        console.log(req.url);
        res.end('Hello World!');
    }).listen(process.env.PORT_LISTEN);
}

processQueue.processQueue();
