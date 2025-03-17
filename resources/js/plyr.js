// Change the second argument to your options:
// https://github.com/sampotts/plyr/#options
/* var player = new Plyr('.ctn video', {
    muted: false,
    volume: 1,
    controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
  }); */

  document.addEventListener("DOMContentLoaded", function () {
    const video = document.querySelector('.ctn video');

    // Check if Hls.js is available
    if (typeof Hls !== "undefined" && Hls.isSupported()) {
        const hls = new Hls();
        hls.loadSource(video.querySelector("source").src);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function () {
            video.play();
            // Initialize Plyr only after HLS is set up
            new Plyr(video, {
                muted: false,
                volume: 1,
                controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
            });
        });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = video.querySelector("source").src;
        video.play();
        new Plyr(video, {
            muted: false,
            volume: 1,
            controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
        });
    }
});

    