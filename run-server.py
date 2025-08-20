#!/usr/bin/env python3
"""
Simple HTTP Server for Zigma Global Wear Website
Serves the website on localhost:8000
"""

import os
import sys
import http.server
import socketserver
from pathlib import Path

# Configuration
PORT = 8000
DIRECTORY = "wordpress-site"

class ZigmaHTTPRequestHandler(http.server.SimpleHTTPRequestHandler):
    """Custom request handler for Zigma Global Wear website"""
    
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=DIRECTORY, **kwargs)
    
    def end_headers(self):
        # Add CORS headers for development
        self.send_header('Access-Control-Allow-Origin', '*')
        self.send_header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        self.send_header('Access-Control-Allow-Headers', 'Content-Type')
        super().end_headers()
    
    def log_message(self, format, *args):
        # Custom logging format
        print(f"[{self.log_date_time_string()}] {format % args}")

def main():
    """Start the HTTP server"""
    
    # Check if the wordpress-site directory exists
    if not os.path.exists(DIRECTORY):
        print(f"Error: Directory '{DIRECTORY}' not found!")
        print("Please make sure you're running this script from the correct location.")
        sys.exit(1)
    
    # Check if index.html exists
    index_file = os.path.join(DIRECTORY, "index.html")
    if not os.path.exists(index_file):
        print(f"Warning: index.html not found in {DIRECTORY}")
        print("Creating a simple index.html file...")
        
        # Create a simple index.html if it doesn't exist
        simple_html = """<!DOCTYPE html>
<html>
<head>
    <title>Zigma Global Wear - Setup Required</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; text-align: center; }
        .container { max-width: 600px; margin: 0 auto; }
        .status { background: #f0f0f0; padding: 20px; border-radius: 10px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Zigma Global Wear</h1>
        <div class="status">
            <h2>Website Files Loading...</h2>
            <p>The WordPress skeleton files are being set up.</p>
            <p>Please wait while the theme files are created.</p>
        </div>
        <p><strong>Server Status:</strong> Running on localhost:8000</p>
        <p><strong>Date:</strong> """ + str(Path().absolute()) + """</p>
    </div>
</body>
</html>"""
        
        with open(index_file, 'w') as f:
            f.write(simple_html)
    
    try:
        # Start the server
        with socketserver.TCPServer(("", PORT), ZigmaHTTPRequestHandler) as httpd:
            print("=" * 60)
            print("🌐 ZIGMA GLOBAL WEAR - LOCAL DEVELOPMENT SERVER")
            print("=" * 60)
            print(f"📂 Serving directory: {os.path.abspath(DIRECTORY)}")
            print(f"🌍 Server running on: http://localhost:{PORT}")
            print(f"📱 Mobile testing: http://192.168.1.XXX:{PORT}")
            print("-" * 60)
            print("📄 Available pages:")
            print(f"   • Homepage: http://localhost:{PORT}/")
            print(f"   • Products: http://localhost:{PORT}/products.html")
            print(f"   • Contact:  http://localhost:{PORT}/contact.html")
            print("-" * 60)
            print("🔧 Features included:")
            print("   • Sticky header navigation")
            print("   • Mobile responsive design")
            print("   • Content containers ready")
            print("   • Contact form (demo)")
            print("   • WordPress theme structure")
            print("-" * 60)
            print("ℹ️  Press Ctrl+C to stop the server")
            print("=" * 60)
            
            # Serve forever
            httpd.serve_forever()
            
    except KeyboardInterrupt:
        print("\n\n🛑 Server stopped by user")
        print("Thank you for testing Zigma Global Wear!")
        
    except OSError as e:
        if e.errno == 48:  # Address already in use
            print(f"\n❌ Error: Port {PORT} is already in use!")
            print("Solutions:")
            print(f"1. Try a different port: python3 run-server.py --port 8001")
            print("2. Stop the other process using this port")
            print("3. Wait a moment and try again")
        else:
            print(f"\n❌ Server error: {e}")
        sys.exit(1)
        
    except Exception as e:
        print(f"\n❌ Unexpected error: {e}")
        sys.exit(1)

if __name__ == "__main__":
    # Handle command line arguments
    if len(sys.argv) > 1:
        if sys.argv[1] == "--help" or sys.argv[1] == "-h":
            print("Zigma Global Wear Local Server")
            print("Usage: python3 run-server.py [--port PORT]")
            print("Default port: 8000")
            sys.exit(0)
        elif sys.argv[1] == "--port" and len(sys.argv) > 2:
            try:
                PORT = int(sys.argv[2])
            except ValueError:
                print("Error: Port must be a number")
                sys.exit(1)
    
    main() 