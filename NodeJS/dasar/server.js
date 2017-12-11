var http = require('http');

var host= 'localhost';
var port= 3000;

http.createServer(function (req, res){
	res.writeHead(200, {'Content-Type': 'text/plain'});
  	res.end('Hello Tegar\n');

}).listen(port, host);

console.log('Script berjalan pada server',host, 'port', port);