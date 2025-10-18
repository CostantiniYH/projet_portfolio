<?php
$nom = $cite->get_nom();
$population = $cite->get_population();
$superficie = $cite->get_superficie();
?>
<?php foreach ($cite as $key => $value): ?>

<div class="card">
    <h1 class="card-header">Politique de <?php echo $nom; ?></h1>
    <p>La population de <?php echo $nom; ?> est de <?php echo number_format($population, 0, ',', ' '); ?> habitants.</p>
    <p>La superficie de <?php echo $nom; ?> est de <?php echo number_format($superficie, 0, ',', ' '); ?> km².</p>
    
</div>
<?php endforeach; ?>
<?php
// php_class_with_animations.php
// Exemple d'une classe PHP avec 5 propriétés et une page qui affiche
// chaque propriété accompagnée d'une forme/animation.

class UserProfile {
    public string $name;
    public int $age;
    public string $email;
    public string $role;
    public bool $active;

    public function __construct(string $name, int $age, string $email, string $role, bool $active) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->role = $role;
        $this->active = $active;
    }

    // Retourne un tableau propriété => valeur
    public function toArray(): array {
        return [
            'name' => $this->name,
            'age'  => $this->age,
            'email'=> $this->email,
            'role' => $this->role,
            'active' => $this->active ? 'true' : 'false'
        ];
    }
}

// Instanciation d'exemple
$user = new UserProfile("Alice", 29, "alice@example.com", "admin", true);
$props = $user->toArray();

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Classe PHP — propriétés animées</title>
  <style>
    :root{ --bg:#0f1724; --card:#0b1220; --accent:#60a5fa; --muted:#94a3b8 }
    .wrap{max-width:980px;margin:0 auto}
    h1{font-size:1.6rem;margin:0 0 18px}
    .card{margin-bottom: 20px;background:rgba(255,255,255,0.03); padding:18px;border-radius:12px; box-shadow:0 6px 18px rgba(2,6,23,0.6)}
    .class-block{display:flex;gap:20px;align-items:flex-start}
    .code{flex:1;min-width:320px}
    pre{background:rgba(10,14,22,0.6); padding:14px;border-radius:8px;overflow:auto}

    .visual{width:360px;flex:0 0 360px}
    .prop-list{display:grid;grid-template-columns:1fr;gap:12px;margin:0;padding:0;list-style:none}
    .prop-item{display:flex;align-items:center;gap:12px;padding:10px;border-radius:10px;background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent)}
    .shape{width:56px;height:56px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
    .label{flex:1}
    .key{font-size:0.9rem;color:var(--muted)}
    .val{font-weight:600;font-size:1.02rem}

    /* --- Formes CSS / SVG --- */
    .circle{border-radius:999px;background:linear-gradient(135deg,var(--accent), #3b82f6);box-shadow:0 6px 20px rgba(96,165,250,0.12);}
    .square{background:linear-gradient(180deg,#34d399,#10b981); border-radius:10px;}
    .triangle svg{width:56px;height:56px}
    .hexagon{width:56px;height:56px;clip-path:polygon(25% 6%,75% 6%,100% 50%,75% 94%,25% 94%,0% 50%);background:linear-gradient(180deg,#f59e0b,#ef4444)}
    .star svg{width:56px;height:56px}

    /* --- Animations --- */
    .anim-bounce{animation:float 2.2s ease-in-out infinite}
    .anim-rotate{animation:rot 3s linear infinite}
    .anim-pulse{animation:pulse 1.6s ease-in-out infinite}
    .anim-swing{animation:swing 2.5s ease-in-out infinite}

    @keyframes float{0%{transform:translateY(0)}50%{transform:translateY(-8px)}100%{transform:translateY(0)}}
    @keyframes rot{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}
    @keyframes pulse{0%{transform:scale(1)}50%{transform:scale(1.08)}100%{transform:scale(1)}}
    @keyframes swing{0%{transform:rotate(-6deg)}50%{transform:rotate(6deg)}100%{transform:rotate(-6deg)}}

    /* Interactions */
    .prop-item:hover{transform:translateY(-6px);transition:transform .22s ease}
    .hint{font-size:0.85rem;color:var(--muted);margin-top:8px}

    /* Responsive */
    @media (max-width:880px){.class-block{flex-direction:column}.visual{width:100%;flex:auto}}
  </style>
</head>
<body>
  <div class="wrap">
    <h1>Affichage d'une classe PHP avec formes/animations par propriété</h1>
    <div class="card class-block">
      <div class="code">
        <h2 style="font-size:1rem;margin-bottom:8px">Code de la classe (extrait)</h2>
        <pre><code><?php
// Affichage simplifié :
$sample = <<<'PHP'
class UserProfile {
  public string $name;
  public int $age;
  public string $email;
  public string $role;
  public bool $active;
}
PHP;

echo htmlspecialchars($sample);
?></code></pre>
        <p class="hint">Survolez une propriété dans la colonne de droite pour activer une interaction visuelle. Cliquez pour verrouiller/déverrouiller l'animation.</p>
      </div>

      <aside class="visual">
        <h2 style="font-size:1rem;margin:0 0 12px">Propriétés visuelles</h2>
        <ul class="prop-list" id="props">
          <?php foreach($props as $key => $val):
              // on attribue une forme et une animation selon l'ordre
              // mapping simple : name->circle, age->square, email->triangle, role->hexagon, active->star
              $map = [
                'name' => ['class'=>'circle','anim'=>'anim-bounce','title'=>'Nom'],
                'age'  => ['class'=>'square','anim'=>'anim-rotate','title'=>'Âge'],
                'email'=> ['class'=>'triangle','anim'=>'anim-pulse','title'=>'Email'],
                'role' => ['class'=>'hexagon','anim'=>'anim-swing','title'=>'Rôle'],
                'active'=>['class'=>'star','anim'=>'anim-pulse','title'=>'Actif']
              ];
              $m = $map[$key];
          ?>
          <li class="prop-item" data-prop="<?=htmlspecialchars($key)?>">
            <div class="shape <?=$m['class']?> <?=$m['anim']?>" aria-hidden="true">
              <?php if($key==='triangle' || $key==='email'): /* triangle SVG */ ?>
                <!-- handled below -->
              <?php endif; ?>

              <?php if($key==='email'): ?>
                <!-- triangle -->
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="50,6 94,86 6,86" fill="#60a5fa" />
                </svg>
              <?php elseif($key==='active'): ?>
                <!-- star -->
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="50,6 61,39 95,39 67,59 78,92 50,72 22,92 33,59 5,39 39,39" fill="#f97316" />
                </svg>
              <?php endif; ?>
            </div>

            <div class="label">
              <div class="key"><?=htmlspecialchars($m['title'])?></div>
              <div class="val"><?=htmlspecialchars($val)?></div>
            </div>
            <button class="btn-toggle" style="background:transparent;border:1px solid rgba(255,255,255,0.06);padding:6px 8px;border-radius:8px;color:var(--muted);cursor:pointer">Pause</button>
          </li>
          <?php endforeach; ?>
        </ul>
      </aside>
    </div>
  </div>

  <script>
    // Script minimal pour gérer interactions : hover active/désactive, clic pause
    document.querySelectorAll('.prop-item').forEach(item => {
      const shape = item.querySelector('.shape');
      const btn = item.querySelector('.btn-toggle');
      let paused = false;

      item.addEventListener('mouseover', ()=>{ if(!paused) shape.classList.add('anim-pulse'); });
      item.addEventListener('mouseleave', ()=>{ if(!paused) shape.classList.remove('anim-pulse'); });

      btn.addEventListener('click', ()=>{
        paused = !paused;
        if(paused){
          // stopper toutes les animations en ajoutant style
          shape.style.animationPlayState = 'paused';
          btn.textContent = 'Play';
        } else {
          shape.style.animationPlayState = 'running';
          btn.textContent = 'Pause';
        }
      });
    });
  </script>
</body>
</html>
