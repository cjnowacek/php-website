<?php // play/index.php — Traitors & Titans: join a game by room code.
      // Standalone on purpose (no site header/footer): phones want a fast, focused page.
      // Supports /play/?room=ABCD for QR codes — auto-resolves on load.
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex">
<title>Traitors &amp; Titans — Join Game</title>
<style>
  :root { color-scheme: dark; }
  * { box-sizing: border-box; }
  body { margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center;
         background:#14100c; color:#e8dcc8; font:16px/1.5 ui-monospace,Menlo,Consolas,monospace; }
  main { width:min(92vw,420px); text-align:center; padding:24px 0 48px; }
  h1 { font-size:20px; letter-spacing:3px; color:#f0c86e; margin:0 0 6px; }
  p.sub { color:#8a7a5e; font-size:13px; margin:0 0 28px; }
  #code { width:100%; text-align:center; font:inherit; font-size:42px; letter-spacing:14px;
          text-transform:uppercase; padding:14px 0 14px 14px; background:#0f0b08; color:#e8dcc8;
          border:1px solid #3a2d1f; border-radius:10px; outline:none; }
  #code:focus { border-color:#b89b6a; }
  button { width:100%; margin-top:14px; font:inherit; font-size:18px; letter-spacing:2px;
           padding:14px; background:#3a2d1f; color:#f0c86e; border:0; border-radius:10px; cursor:pointer; }
  button:disabled { opacity:.5; }
  #msg { min-height:48px; margin-top:18px; font-size:14px; color:#d0a04b; }
  #msg.err { color:#ff6a5e; }
  #alts { margin-top:6px; font-size:14px; }
  #alts a { display:block; color:#9fd0ff; padding:6px 0; }
</style>
</head>
<body>
<main>
  <h1>TRAITORS &amp; TITANS</h1>
  <p class="sub">enter the room code from the game master's screen</p>
  <input id="code" maxlength="8" autocomplete="off" autocapitalize="characters"
         spellcheck="false" placeholder="ABCD">
  <button id="go">JOIN</button>
  <div id="msg"></div>
  <div id="alts"></div>
</main>
<script>
var codeEl=document.getElementById('code'), goEl=document.getElementById('go'),
    msgEl=document.getElementById('msg'), altsEl=document.getElementById('alts');

function setMsg(text, err){ msgEl.textContent=text; msgEl.className=err?'err':''; }

function join(){
  var code=codeEl.value.trim().toUpperCase();
  if(!/^[A-Z2-9]{4,8}$/.test(code)){ setMsg('that does not look like a room code', true); return; }
  goEl.disabled=true; altsEl.innerHTML=''; setMsg('finding room '+code+'…');
  fetch('api.php?action=resolve&room='+encodeURIComponent(code))
    .then(function(r){ return r.json(); })
    .then(function(d){
      if(!d.ok || !d.urls || !d.urls.length){ setMsg(d.error||'room not found', true); goEl.disabled=false; return; }
      // Auto-try the first address (the GM's LAN IP — right whenever you share the
      // GM's network). The rest are shown as tappable fallbacks: browsers can't
      // report "unreachable" across origins, so the player is the prober.
      setMsg('connecting to the game…');
      if(d.urls.length>1){
        altsEl.innerHTML='<div style="color:#8a7a5e">if nothing loads, try:</div>'+
          d.urls.slice(1).map(function(u){ return '<a href="'+u+'">'+u+'</a>'; }).join('');
      }
      setTimeout(function(){ location.href=d.urls[0]; }, 400);
    })
    .catch(function(){ setMsg('directory unreachable — check your connection', true); goEl.disabled=false; });
}

goEl.addEventListener('click', join);
codeEl.addEventListener('keydown', function(e){ if(e.key==='Enter') join(); });
codeEl.focus();

var qr=new URLSearchParams(location.search).get('room');
if(qr){ codeEl.value=qr.toUpperCase(); join(); }
</script>
</body>
</html>
