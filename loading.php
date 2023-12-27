<?php
  // PHP code converted from HTML
  
  echo '<!DOCTYPE html>
  <html>
  <head>
    <title>Loading Page</title>
    <style>
      body {
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }
      
      .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
      }
      
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      
      .loading-text {
        font-size: 24px;
        margin-top: 20px;
      }
      
      .loading-container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <div class="loading-container">
      <div class="loader"></div>
      <p class="loading-text">Loading...</p>
    </div>';
  
  // Redirect to "terms.php" after 3 seconds
  echo '<script>
    setTimeout(function() {
      window.location.href = "terms.php";
    }, 3000);
  </script>';
  
  echo '</body>
  </html>';
?>
