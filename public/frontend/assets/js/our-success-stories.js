(function () {
  const track = document.getElementById("our_sucess_stories_track");
  const prev = document.querySelector(".our_sucess_stories_prev");
  const next = document.querySelector(".our_sucess_stories_next");

  function cardStep() {
    const card = track.querySelector(".our_sucess_stories_card");
    const style = getComputedStyle(track);
    const gap = parseInt(style.gap || style.columnGap || 0, 10);
    return card ? card.getBoundingClientRect().width + gap : track.clientWidth;
  }

  function updateButtons() {
    const max = track.scrollWidth - track.clientWidth - 1;
    prev.disabled = track.scrollLeft <= 0;
    next.disabled = track.scrollLeft >= max;
  }

  prev.addEventListener("click", () =>
    track.scrollBy({ left: -cardStep(), behavior: "smooth" })
  );
  next.addEventListener("click", () =>
    track.scrollBy({ left: cardStep(), behavior: "smooth" })
  );
  track.addEventListener("scroll", updateButtons);
  window.addEventListener("load", updateButtons);
  window.addEventListener("resize", () => setTimeout(updateButtons, 50));

  // ✅ Only one video plays at a time
  const videos = track.querySelectorAll("video");

  videos.forEach((video) => {
    video.addEventListener("play", () => {
      videos.forEach((other) => {
        if (other !== video) {
          other.pause();
          other.currentTime = 0; // reset to beginning (optional)
        }
      });
    });
  });
})();
