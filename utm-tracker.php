<script>
(function () {

  const COOKIE_DAYS = 30;
  const DEFAULT_SOURCE = "ICMCER";

  const PARAMS = ["utm_source","utm_medium","utm_campaign","utm_content","utm_term"];

  function getParams() {
    const data = {};
    const query = new URLSearchParams(window.location.search);

    PARAMS.forEach(p => {
      if (query.has(p)) data[p] = query.get(p);
    });

    return data;
  }

  function detectMedium() {
    const ref = document.referrer;
    if (!ref) return "direct";

    const domain = new URL(ref).hostname;

    if (/google|bing|yahoo|duckduckgo/.test(domain)) return "organic";
    if (/facebook|linkedin|instagram|twitter|x.com|youtube|whatsapp/.test(domain)) return "social";

    return "referral";
  }

  function setCookie(name, value) {
    const expiry = new Date(Date.now() + COOKIE_DAYS * 86400000).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expiry}; path=/`;
  }

  function run() {
    let data = getParams();

    if (!data.utm_medium) {
      data.utm_medium = detectMedium();
    }

    if (data.utm_medium !== "cpc") {
      data.utm_source = data.utm_source || DEFAULT_SOURCE;
    }

    Object.keys(data).forEach(key => {
      if (data[key]) setCookie(key, data[key]);
    });
  }

  run();

})();
</script>
