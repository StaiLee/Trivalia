<!doctype html>
<html lang="en">

<head>
    <title>Contact Form 05</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trivalia</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/import/assets/css/styles.css') }}" rel="stylesheet"/>
    <script
        nonce="cc268baa-76bf-41ab-9037-82e13aa80ef6">try { (function (w, d) { !function (o, p, q, r) { o[q] = o[q] || {}; o[q].executed = []; o.zaraz = { deferred: [], listeners: [] }; o.zaraz.q = []; o.zaraz._f = function (s) { return async function () { var t = Array.prototype.slice.call(arguments); o.zaraz.q.push({ m: s, a: t }) } }; for (const u of ["track", "set", "debug"]) o.zaraz[u] = o.zaraz._f(u); o.zaraz.init = () => { var v = p.getElementsByTagName(r)[0], w = p.createElement(r), x = p.getElementsByTagName("title")[0]; x && (o[q].t = p.getElementsByTagName("title")[0].text); o[q].x = Math.random(); o[q].w = o.screen.width; o[q].h = o.screen.height; o[q].j = o.innerHeight; o[q].e = o.innerWidth; o[q].l = o.location.href; o[q].r = p.referrer; o[q].k = o.screen.colorDepth; o[q].n = p.characterSet; o[q].o = (new Date).getTimezoneOffset(); if (o.dataLayer) for (const B of Object.entries(Object.entries(dataLayer).reduce(((C, D) => ({ ...C[1], ...D[1] })), {}))) zaraz.set(B[0], B[1], { scope: "page" }); o[q].q = []; for (; o.zaraz.q.length;) { const E = o.zaraz.q.shift(); o[q].q.push(E) } w.defer = !0; for (const F of [localStorage, sessionStorage]) Object.keys(F || {}).filter((H => H.startsWith("_zaraz_"))).forEach((G => { try { o[q]["z_" + G.slice(7)] = JSON.parse(F.getItem(G)) } catch { o[q]["z_" + G.slice(7)] = F.getItem(G) } })); w.referrerPolicy = "origin"; w.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(o[q]))); v.parentNode.insertBefore(w, v) };["complete", "interactive"].includes(p.readyState) ? zaraz.init() : o.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };</script>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Contact Form #05</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Contact us</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY
                                                        10016</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Email:</span> <a
                                                            href="/cdn-cgi/l/email-protection#137a7d757c536a7c6661607a67763d707c7e"><span
                                                                class="__cf_email__"
                                                                data-cfemail="7b12151d143b02140e0908120f1e55181416">[email&#160;protected]</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Create a message here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-100 social-media mt-5">
                                        <h3>Follow us here</h3>
                                        <p>
                                            <a href="#">Facebook</a>
                                            <a href="#">Twitter</a>
                                            <a href="#">Instagram</a>
                                            <a href="#">Dribbble</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"854426234c336f0d","version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html>