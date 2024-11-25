// index.js

const http = require('http');

// Set the port number
const port = process.env.PORT || 4002;

// Create an HTTP server
const server = http.createServer((req, res) => {
  // Set response headers
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  
  // Send a response
  res.end('Hello, World');
});

// Start the server
server.listen(port, () => {
  console.log(`Server running at http://localhost:${port}/`);
});
