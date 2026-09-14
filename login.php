<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | ya arya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="background"></div>
  <div class="background-overlay"></div>

  <header>
    <div class="logo">✦ PORTFOLIO</div>
    <nav><a href="index.html">← Porto</a></nav>
  </header>

  <main style="display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 20px;">
    
    <!-- CARD LOGIN -->
    <div style="width: 350px; background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(255, 255, 255, 0.15); padding: 30px; border-radius: 12px; backdrop-filter: blur(8px);">
      
      <div style="text-align: center; margin-bottom: 25px;">
        <small style="color: #a0aec0; letter-spacing: 1.5px; font-size: 0.75rem;">ADMIN ACCESS</small>
        <h2 style="margin-top: 5px; font-size: 1.3rem; color: #fff;">Login System</h2>
      </div>

      <form action="ceklog.php" method="POST">
        
        <div style="margin-bottom: 18px;">
          <label for="username" style="display: block; color: #a0aec0; margin-bottom: 6px; font-size: 0.85rem;">Username</label>
          <input type="text" id="username" name="username" required 
            style="width: 100%; padding: 11px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px; color: #fff; font-size: 0.9rem; outline: none; box-sizing: border-box; transition: 0.3s;"
            onfocus="this.style.borderColor='#b388ff'" onblur="this.style.borderColor='rgba(255, 255, 255, 0.2)'">
        </div>

        <div style="margin-bottom: 25px;">
          <label for="password" style="display: block; color: #a0aec0; margin-bottom: 6px; font-size: 0.85rem;">Password</label>
          <input type="password" id="password" name="password" required 
            style="width: 100%; padding: 11px 14px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px; color: #fff; font-size: 0.9rem; outline: none; box-sizing: border-box; transition: 0.3s;"
            onfocus="this.style.borderColor='#b388ff'" onblur="this.style.borderColor='rgba(255, 255, 255, 0.2)'">
        </div>

        <button type="submit" 
          style="width: 100%; padding: 12px; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.25); color: #fff; border-radius: 8px; cursor: pointer; font-family: 'Orbitron', sans-serif; font-size: 0.85rem; font-weight: 500; transition: 0.3s;"
          onmouseover="this.style.background='#b388ff'; this.style.color='#000';" 
          onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.color='#fff';">
          MASUK ➔
        </button>

      </form>

    </div>

  </main>

</body>
</html>