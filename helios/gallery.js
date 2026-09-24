// Fills every [data-path] grid with the files committed in that repo folder, read through the
// GitHub contents API — add a file, push, and it appears. No manifest to edit.
//   data-path="helios/art/concept"   repo folder to list
//   data-kind="image" | "video"
// Files sort by name, so a numeric or date prefix sets the order. The name becomes the caption:
// "2026-07-12-Grass-at-last.jpg" or "2026-07-12-1530-Grass-at-last.jpg" (time keeps same-day
// shots in order, and is hidden) reads "Grass at last · Jul 2026".
(function () {
  var REPO = 'davidrynn/davidrynn.github.io';
  var MATCH = {
    image: /\.(png|jpe?g|gif|webp|avif)$/i,
    video: /\.(mp4|webm|mov)$/i
  };
  var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  function caption(name) {
    var base = name.replace(/\.[^.]+$/, '');
    var dated = base.match(/^(\d{4})-(\d{2})-\d{2}(?:[-_ ]\d{4,6})?[-_ ]+(.*)$/);
    if (dated) {
      return dated[3].replace(/[-_]+/g, ' ') + ' · ' + MONTHS[+dated[2] - 1] + ' ' + dated[1];
    }
    return base.replace(/^\d+[-_ ]+/, '').replace(/[-_]+/g, ' ');
  }

  var lightbox = document.getElementById('lightbox');
  var lightboxImg = lightbox && lightbox.querySelector('img');
  if (lightbox) lightbox.addEventListener('click', function () { lightbox.close(); });

  function tile(kind, url, text) {
    var fig = document.createElement('figure');
    if (kind === 'image') {
      var btn = document.createElement('button');
      var img = document.createElement('img');
      img.src = url;
      img.alt = text;
      img.loading = 'lazy';
      btn.appendChild(img);
      btn.addEventListener('click', function () {
        lightboxImg.src = url;
        lightboxImg.alt = text;
        lightbox.showModal();
      });
      fig.appendChild(btn);
    } else {
      var video = document.createElement('video');
      video.src = url;
      video.controls = true;
      video.preload = 'metadata';
      video.playsInline = true;
      fig.appendChild(video);
    }
    var cap = document.createElement('figcaption');
    cap.textContent = text;
    fig.appendChild(cap);
    return fig;
  }

  document.querySelectorAll('[data-path]').forEach(function (grid) {
    var path = grid.getAttribute('data-path');
    var kind = grid.getAttribute('data-kind');

    fetch('https://api.github.com/repos/' + REPO + '/contents/' + path)
      .then(function (r) { if (!r.ok) throw new Error(r.status); return r.json(); })
      .then(function (files) {
        files = files
          .filter(function (f) { return f.type === 'file' && MATCH[kind].test(f.name); })
          .sort(function (a, b) { return a.name.localeCompare(b.name, undefined, { numeric: true }); });
        grid.innerHTML = '';
        if (!files.length) {
          grid.innerHTML = '<p class="empty">Coming soon.</p>';
          return;
        }
        files.forEach(function (f) {
          grid.appendChild(tile(kind, '/' + path + '/' + encodeURIComponent(f.name), caption(f.name)));
        });
      })
      .catch(function () {
        grid.innerHTML = '<p class="empty">Couldn’t load this section right now — try refreshing.</p>';
      });
  });
})();
