// Vercel configuration for React + Vite project
module.exports = {
  // Build settings
  buildCommand: 'npm run build',
  outputDirectory: 'dist',
  installCommand: 'npm install',
  
  // Framework detection
  framework: 'vite',
  
  // Environment variables (add your own as needed)
  env: {
    NODE_ENV: 'production'
  },
  
  // Build configuration
  build: {
    env: {
      NODE_ENV: 'production'
    }
  },
  
  // Functions configuration (if needed)
  functions: {
    // Configure serverless functions here if needed
  },
  
  // Redirects and rewrites for SPA
  rewrites: [
    {
      source: '/(.*)',
      destination: '/index.html'
    }
  ],
  
  // Headers configuration
  headers: [
    {
      source: '/(.*)\\.(js|css|png|jpg|jpeg|gif|ico|svg)',
      headers: [
        {
          key: 'Cache-Control',
          value: 'public, max-age=31536000, immutable'
        }
      ]
    }
  ],
  
  // Regions for deployment
  regions: ['cdg1'], // Paris region (closest to Europe/Spain)
  
  // Node.js version
  engines: {
    node: '18.x'
  }
};