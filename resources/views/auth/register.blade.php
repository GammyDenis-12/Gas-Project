<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="cf6543f1-b8e6-4f64-a1d9-89f277ba5b57">
        (function(w, d) {
            ! function(e, f, g, h) {
                e.zarazData = e.zarazData || {};
                e.zarazData.executed = [];
                e.zaraz = {
                    deferred: [],
                    listeners: []
                };
                e.zaraz.q = [];
                e.zaraz._f = function(i) {
                    return function() {
                        var j = Array.prototype.slice.call(arguments);
                        e.zaraz.q.push({
                            m: i,
                            a: j
                        })
                    }
                };
                for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
                e.zaraz.init = () => {
                    var l = f.getElementsByTagName(h)[0],
                        m = f.createElement(h),
                        n = f.getElementsByTagName("title")[0];
                    n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
                    e.zarazData.x = Math.random();
                    e.zarazData.w = e.screen.width;
                    e.zarazData.h = e.screen.height;
                    e.zarazData.j = e.innerHeight;
                    e.zarazData.e = e.innerWidth;
                    e.zarazData.l = e.location.href;
                    e.zarazData.r = f.referrer;
                    e.zarazData.k = e.screen.colorDepth;
                    e.zarazData.n = f.characterSet;
                    e.zarazData.o = (new Date).getTimezoneOffset();
                    if (e.dataLayer)
                        for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                                ...s[1],
                                ...t[1]
                            }))))) zaraz.set(r[0], r[1], {
                            scope: "page"
                        });
                    e.zarazData.q = [];
                    for (; e.zaraz.q.length;) {
                        const u = e.zaraz.q.shift();
                        e.zarazData.q.push(u)
                    }
                    m.defer = !0;
                    for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith(
                        "_zaraz_"))).forEach((w => {
                        try {
                            e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
                        } catch {
                            e.zarazData["z_" + w.slice(7)] = v.getItem(w)
                        }
                    }));
                    m.referrerPolicy = "origin";
                    m.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
                    l.parentNode.insertBefore(m, l)
                };
                ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="../../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
                <a href="login.html" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
