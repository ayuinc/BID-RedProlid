(function(z){
var w9 = function() {
  this.postList = null;
  this.vd = {};
  z.J.call(this, void 0);
};
var x9 = function() {
  this.postList = null;
  this.vd = {};
  z.J.call(this, void 0);
};
var y9 = function() {
  this.postList = null;
  this.vd = {};
  z.J.call(this, void 0);
};
var z9 = function() {
  this.vd = {};
  z.J.call(this, void 0);
};
var A9 = function(a) {
  a = a.path.split("/");
  return "latest" == a[a.length - 1] ? "published-at" : "recent-vote-count";
};
var B9 = function(a, b, c) {
  var d = "";
  switch(c) {
    case "latest":
      d = z.q1.U({username:b});
      break;
    case "recommended":
      d = z.r1.U({username:b});
      break;
    case "has-recommended":
      d = z.s1.U({username:b});
      break;
    default:
      z.Px("Asked to create a postlist of an unknown type: " + c);
  }
  a = a.Lh(d, "POST");
  a.Bi("username", b);
  return a;
};
var Bca = function(a, b, c) {
  return a.GB(b, a.Va.qG(c));
};
var Cca = function(a, b, c, d) {
  return a.EB(b, c, a.Va.oG(d));
};
var Dca = function(a, b, c) {
  return a.sB(b, a.Va.pm(c));
};
var Eca = function(a, b, c) {
  return a.rB(b, a.Va.pm(c));
};
var C9 = function(a, b) {
  z.yT(a).wo("slug", b);
  z.zT(a).wo("slug", b);
};
var D9 = function(a, b, c) {
  return (0,z.M)(z.QJ({action:"toggle-hide-user", Pa:a.userId, gL:a.Fm, xa:"js-toggleHideUser", na:a.bN ? "Show user" : "Hide user", Je:!0}, c));
};
var E9 = function(a) {
  a = a || {};
  return (0,z.M)('\x3cbutton class\x3d"button button--chromeless button--replaceImage ' + (a.mb ? "button--light" : "") + ' imageControls" data-action\x3d"pick-image"' + (a.L0 ? 'data-tooltip\x3d"' + z.Q(a.L0) + '"' : "") + '\x3e\x3cspan class\x3d"icon ' + (a.VZ ? "icon--addMediaImage" : "icon--replaceImage") + '"\x3e\x3c/span\x3e\x3cspan class\x3d"u-textScreenReader"\x3eUpload an optional image.\x3c/span\x3e\x3c/button\x3e');
};
var F9 = function(a, b) {
  var c = '\x3cdiv class\x3d"infoCard u-clearfix js-infoCardUser' + (a.yq ? " infoCard--padded" : "") + (a.lj ? " is-hidden" : "") + '" data-user-id\x3d"' + z.Q(a.user.userId) + '"\x3e\x3cdiv class\x3d"infoCard-avatar"\x3e' + z.P(z.iL(a, b)) + "\x3c/div\x3e", d = a.user.bio, c = c + ('\x3cdiv class\x3d"infoCard-info"\x3e\x3cdiv class\x3d"infoCard-wrapper"\x3e' + (a.si || a.title ? '\x3cdiv class\x3d"infoCard-title js-userTitle u-hideOutline"\x3e' + (a.title ? z.L(a.title) : "") + "\x3c/div\x3e" : 
  "") + z.P(z.gK(z.O(a, {isPrimary:!0}), b)) + (d ? '\x3cdiv class\x3d"infoCard-bio"\x3e' + z.P(z.nv(String(d))) + "\x3c/div\x3e" : "") + "\x3c/div\x3e\x3c/div\x3e" + (b.currentUser.userId != a.user.userId || a.si ? '\x3cdiv class\x3d"infoCard-actions' + (a.O7 ? " infoCard-actions--stacked" : "") + '"\x3e' + (a.si ? z.P(D9(z.O(a, {userId:a.user.userId, bN:a.lj}), 0, b)) : b.currentUser.userId != a.user.userId ? z.pN({Wa:null == a.user ? null : null == a.user.social ? null : a.user.social.isFollowing, 
  qi:!0, action:"toggle-subscribe-user", Pa:a.user.userId, Sf:(0,z.S)("" + z.R(z.Ht(a, b)))}, b) : "") + "\x3c/div\x3e" : "") + "\x3c/div\x3e");
  return (0,z.M)(c);
};
var G9 = function(a, b, c) {
  return (0,z.M)(z.eL(z.O(a, {width:120, height:120, ee:"avatar avatar--large", bf:"avatar-image avatar-image--large"}), c));
};
var H9 = function(a, b, c) {
  return (0,z.Et)(z.Yt(z.O(a.image, {strategy:"crop-fixed", darken:a.bm ? 25 : 0, verticalGradient:a.bm ? "29/81/40" : "29/81/30", blur:a.bm ? 50 : null}), 0, c));
};
var I9 = function(a, b, c) {
  return (0,z.Et)(z.Yt(z.O(a.image, {strategy:"crop-fixed", darken:a.bm ? 50 : 25, verticalGradient:a.bm ? "29/81/40" : "29/81/60", blur:a.bm ? 50 : null}), 0, c));
};
var Fca = function(a, b, c) {
  return (0,z.M)(z.P(z.tQ(z.O(a, {$j:a.yY, Ln:"There are no more posts in this category", XL:(0,z.T)('\x3ca class\x3d"link link--accent" href\x3d"/"\x3eRead more\x3c/a\x3e')}), 0, c)));
};
var Gca = function(a, b, c) {
  b = z.M;
  var d = (0,z.T)('\x3ca class\x3d"m-profile" href\x3d"' + z.Q(z.R(z.Nt(a, c))) + '"\x3e' + z.L(a.user.name) + "\x3c/a\x3e");
  a = a || {};
  var e = z.M, g;
  g = a;
  var h = '\x3cdiv class\x3d"mdm-hero mdm-hero--profile ' + (g.user.backgroundImageId ? "mdm-hero--withImage" : "") + '"\x3e' + z.hU(c);
  if (g.user.backgroundImageId) {
    var k = "" + z.R(z.Yt({imageId:g.user.backgroundImageId, strategy:"crop-fixed"}, 0, c)), k = (0,z.S)(k), h = h + ('\x3cdiv class\x3d"mdm-hero-image mdm-imageCover" style\x3d"background-image: url(' + z.Q(z.R(k)) + ')"\x3e\x3c/div\x3e')
  }
  if (g.user && g.user.imageId) {
    var k = "", l = "" + z.R(z.Yt({imageId:g.user.imageId, width:"190", height:"190", strategy:"crop-fixed"}, 0, c)), l = (0,z.S)(l), k = k + ('\x3cimg src\x3d"' + z.Q(z.R(l)) + '" alt\x3d"@' + z.Q(g.user.username) + '’s avatar"\x3e'), h = h + z.P(z.fK({zc:!0, href:(0,z.S)(z.R(c.baseUrl) + "/@" + z.Cr(g.user.username)), xa:"mdm-avatar", na:(0,z.T)(k)}, c))
  }
  h += '\x3ch1 class\x3d"mdm-hero-title"\x3e' + z.P(z.fK({zc:!0, href:(0,z.S)(z.R(c.baseUrl) + "/@" + z.Cr(g.user.username)), na:g.user.name}, c)) + '\x3c/h1\x3e\x3cp class\x3d"mdm-hero-description"\x3e' + (null != g.user.bio ? z.P(z.nv(String(g.user.bio))) : "") + "\x3c/p\x3e\x3c/div\x3e";
  g = (0,z.M)(h);
  a = e(g + (a.recommendedPosts && a.recommendedPosts.length || a.latestPosts && a.latestPosts.length ? '\x3cdiv class\x3d"mdm-bucket"\x3e' + (a.recommendedPosts && a.recommendedPosts.length ? z.gU(z.O(a, {label:"Recommended", posts:a.recommendedPosts}), c) : "") + (a.latestPosts && a.latestPosts.length ? z.gU(z.O(a, {label:"Latest", posts:a.latestPosts}), c) : "") + "\x3c/div\x3e" : ""));
  return b(z.jU({code:d, previewHtml:(0,z.T)("" + z.L(a))}, c));
};
var Hca = function(a, b, c) {
  b = z.P(z.eM(z.O(a, {Nd:(0,z.T)("" + ((null == a.collection.virtuals ? 0 : null == a.collection.virtuals.permissions ? 0 : a.collection.virtuals.permissions.canManageAll) ? '\x3cdiv class\x3d"buttonSet"\x3e' + (a.si ? z.P(z.QJ({action:"masthead-save", na:"Save", isPrimary:!0}, c)) : z.P(z.VJ({na:"Edit", href:(0,z.S)("" + z.R((0,z.Et)(z.R(z.Gt(c.authBaseUrl, "COLLECTION_MASTHEAD_EDIT", null, a.collection, null))))), title:(0,z.T)("Edit the about page for " + z.L(a.collection.name))}, c))) + '\x3cspan class\x3d"metabar-divider"\x3e\x3c/span\x3e\x3c/div\x3e' : 
  "") + z.P(z.ZL({Wt:!0}, c)))}), c)) + '\x3cdiv class\x3d"container is-underMetabar u-size620 js-masthead"\x3e\x3cdiv class\x3d"row u-xs-top10"\x3e\x3cdiv class\x3d"col u-xs-size12"\x3e';
  var d = "" + z.R(z.mN({imageId:null == a.collection.logo ? null : a.collection.logo.imageId}, 0, c));
  (0,z.S)(d);
  if (null == a.collection.logo ? 0 : a.collection.logo.imageId) {
    var d = {collection:a.collection, title:"About", yq:!0, IF:!0}, e = "", g = "" + z.R(z.mN({imageId:null == d.collection.logo ? null : d.collection.logo.imageId}, 0, c)), g = (0,z.S)(g), e = e + ('\x3cdiv class\x3d"infoCard u-clearfix' + (d.yq ? " infoCard--padded" : "") + '"\x3e\x3cdiv class\x3d"infoCard-info infoCard-info--marginless infoCard-info--short"\x3e\x3cdiv class\x3d"infoCard-wrapper"\x3e' + (d.title ? '\x3cdiv class\x3d"infoCard-title infoCard-title--padded"\x3e' + z.L(d.title) + "\x3c/div\x3e" : 
    "") + z.P(z.cK({na:(0,z.T)('\x3cimg class\x3d"infoCard-logo" src\x3d"' + z.Q(z.R(g)) + '"\x3e'), title:(0,z.T)("Go to " + z.L(d.collection.name)), href:(0,z.S)("" + z.R(z.St(d, c))), source:"aboutPage"}, c)) + '\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d"infoCard-actions' + (d.IF ? " infoCard-actions--avatarless" : "") + '"\x3e' + z.pN({Wa:null == d.collection.virtuals ? null : d.collection.virtuals.isSubscribed, qi:!1, action:"toggle-subscribe-collection", Pa:d.collection.slug, Ys:d.collection.id, 
    Sf:(0,z.S)("" + z.R(z.It(d, c)))}, c) + "\x3c/div\x3e\x3c/div\x3e"), d = (0,z.M)(e), d = z.L(d)
  } else {
    d = z.P(z.oN({collection:a.collection, title:"About", yq:!0, IF:!0}, c));
  }
  e = a.collection.editorsNote ? a.collection.editorsNote : a.collection.metadata.description;
  b = b + (d + '\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d"row"\x3e\x3cdiv class\x3d"col u-xs-size12"\x3e') + (z.P(z.XL({title:"Note from the editor", mb:!0})) + '\x3cp class\x3d"card-text js-editorsNote u-hideOutline"\x3e' + z.L(e) + '\x3c/p\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d"row"\x3e\x3cdiv class\x3d"col u-xs-size12"\x3e');
  if (a.collection.editors.length) {
    for (b += z.P(z.XL({title:"Editors", mb:!0})), d = a.collection.editors, e = d.length, g = 0;g < e;g++) {
      var h = d[g];
      b += z.P(F9({user:h.user, yq:!0, Fm:"editor", lj:h.excluded, title:h.title, si:a.si}, c));
    }
  }
  b += '\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d"row"\x3e\x3cdiv class\x3d"col u-xs-size12"\x3e';
  if (a.collection.writers.length) {
    for (b += z.P(z.XL({title:"Writers", mb:!0})), d = a.collection.writers, e = d.length, g = 0;g < e;g++) {
      h = d[g], b += z.P(F9({user:h.user, yq:!0, Fm:"writer", lj:h.excluded, title:h.title, si:a.si}, c));
    }
  }
  b += "\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e";
  return (0,z.M)(b);
};
var Ica = function(a, b) {
  a = a.bind(b || null);
  if (null != window.FB) {
    a();
  } else {
    if (J9.push(a), !window.fbAsyncInit) {
      window.fbAsyncInit = function() {
        window.FB.init({appId:z.D(z.x, "facebookKey"), frictionlessRequests:!0, oauth:!0, version:"v2.0"});
        for (var a;a = J9.pop();) {
          a();
        }
      };
      var c = window.document.createElement("script");
      c.type = "text/javascript";
      c.async = !0;
      c.src = "//connect.facebook.net/en_US/sdk.js";
      z.Pe(c, window.document.querySelector("script"));
    }
  }
};
var Jca = function(a, b, c) {
  b = "";
  var d;
  d = (0,z.M)(2014 < a.year || 2014 == a.year && ("November" == a.month || "December" == a.month) ? "Most recommended in " + z.L(a.month) + " " + z.L(a.year) : "Most read in " + z.L(a.month) + " " + z.L(a.year));
  d = "" + z.L(d);
  d = (0,z.T)(d);
  var e = "" + z.P(z.SP()), e = (0,z.T)(e), g = "" + (a.prevSlug ? '\x3ca href\x3d"/top-100/' + z.Q(a.prevSlug) + '" class\x3d"u-floatLeft"\x3e\x3cspan class\x3d"icon icon--small icon--arrowLeft"\x3e\x3c/span\x3e\x3c/a\x3e' : "") + (a.nextSlug ? '\x3ca href\x3d"/top-100/' + z.Q(a.nextSlug) + '" class\x3d"u-floatRight"\x3e\x3cspan class\x3d"icon icon--small icon--arrowRight"\x3e\x3c/span\x3e\x3c/a\x3e' : ""), g = (0,z.T)(g);
  b += z.P(z.tQ({posts:a.posts, $j:"Top Stories", title:d, XZ:!0, Ln:e, ct:g}, 0, c));
  return (0,z.M)(b);
};
var Kca = function(a) {
  return (0,z.M)("There was a problem removing " + z.P(z.hv(String(a.title))) + " from the featured section.");
};
var Lca = function(a) {
  return (0,z.M)(z.P(z.hv(String(a.title))) + " no longer featured at the top of your profile.");
};
var Mca = function(a) {
  return (0,z.M)("There was a problem featuring " + z.P(z.hv(String(a.title))) + ".");
};
var Nca = function(a) {
  return (0,z.M)(z.P(z.hv(String(a.title))) + " featured at the top of your profile.");
};
var K9 = function() {
  return (0,z.M)("That’s your current address!");
};
var Oca = function(a) {
  return (0,z.M)("You must have either Twitter or Facebook connected to your Medium account in order to log in. To disconnect this account, please connect a " + z.L(a.Eu) + " account first.");
};
var L9 = function() {
  return (0,z.M)("Sorry, we had a problem while trying to save your settings. Please try again later.");
};
var Pca = function(a, b, c) {
  b = z.M;
  var d = z.P(z.eM(z.O(a, {mb:!0}), c)) + '\x3cdiv class\x3d"container u-size620"\x3e', e;
  e = {prefix:"Tagged in", title:a.tagName, g_:!0, Nd:(0,z.T)("" + (c.variants.show_related_tags && a.relatedTags.length ? '\x3cdiv class\x3d"heading-prefix"\x3eRelated Tags\x3c/div\x3e' + z.hM(z.O(a, {wO:!0, tags:a.relatedTags})) : ""))};
  e = (0,z.M)(z.UL(z.O(e, {ck:(0,z.T)('\x3cdiv class\x3d"heading-prefix"\x3e' + z.L(e.prefix) + "\x3c/div\x3e" + z.VL(e))})));
  return b(d + z.L(e) + z.P(z.QL({Ou:[{href:"/tag/" + a.tagSlug, name:"Top", hd:c.constants.FH.NP == a.sortBy}, {href:"/tag/" + a.tagSlug + "/latest", name:"Latest", hd:c.constants.FH.LP == a.sortBy}]}, c)) + (a.posts.length ? z.P(z.JL({count:a.posts.length, source:"tags", posts:a.posts, Td:a.Td, Pb:!0, yb:!0, lm:!0, ig:!0}, 0, c)) : z.P(z.PL({tm:"This tag does not have any stories yet."}))) + "\x3c/div\x3e");
};
var M9 = function(a, b) {
  z.MQ.call(this, a, b);
  this.N = a.get("request");
  this.S = a.get("dialog");
};
var N9 = function(a, b, c) {
  a = a || {};
  return (0,z.M)(a.ly && a.ly.name ? '\x3cimg class\x3d"list-itemImage list-itemImage--facebook" src\x3d"' + z.Q(z.R(a.ly.image.url)) + '"\x3e\x3cspan class\x3d"list-itemActionGroup"\x3e\x3cspan class\x3d"list-itemName list-itemName--facebook"\x3e' + z.L(a.ly.name) + "\x3c/span\x3e" + (0,z.M)('\x3cbutton data-action\x3d"disconnect-facebook" class\x3d"button--chromeless button--facebookDelete ' + (a.twitterScreenName ? "" : "u-hide") + '"\x3e(disconnect)\x3c/button\x3e\x3cbutton data-action\x3d"help-disconnect" data-action-value\x3d"Twitter" class\x3d"button--chromeless button--disconnectFacebookHelp ' + 
  (a.twitterScreenName ? "u-hide" : "") + '"\x3eHow do I disconnect?\x3c/button\x3e') + "\x3c/span\x3e" : '\x3cbutton class\x3d"button button--facebook" disabled data-action\x3d"connect-facebook" title\x3d"Connect your Facebook account to ' + z.Q(c.productName) + '"\x3e\x3cspan class\x3d"icon icon--facebook"\x3e\x3c/span\x3e\x3cspan class\x3d"button-label--facebook"\x3e' + z.P((0,z.M)("Connect to Facebook")) + "\x3c/span\x3e\x3c/button\x3e");
};
var O9 = function(a, b, c) {
  a = a || {};
  return (0,z.M)(a.dA && a.dA.username ? '\x3cimg class\x3d"list-itemImage list-itemImage--twitter" src\x3d"' + z.Q(z.R(a.dA.image.url)) + '"\x3e\x3cspan class\x3d"list-itemActionGroup"\x3e\x3cspan class\x3d"list-itemName list-itemName--twitter"\x3e@' + z.L(a.dA.username) + "\x3c/span\x3e" + (0,z.M)('\x3cbutton data-action\x3d"disconnect-twitter" class\x3d"button--chromeless button--twitterDelete ' + (a.facebookDisplayName ? "" : "u-hide") + '"\x3e(disconnect)\x3c/button\x3e\x3cbutton data-action\x3d"help-disconnect" data-action-value\x3d"Facebook" class\x3d"button--chromeless button--disconnectTwitterHelp ' + 
  (a.facebookDisplayName ? "u-hide" : "") + '"\x3eHow do I disconnect?\x3c/button\x3e') + "\x3c/span\x3e" : '\x3cbutton class\x3d"button button--twitter" data-action\x3d"connect-twitter" title\x3d"Connect your Twitter account to ' + z.Q(c.productName) + '"\x3e\x3cspan class\x3d"icon icon--twitter"\x3e\x3c/span\x3e\x3cspan class\x3d"button-label--twitter"\x3e' + z.P((0,z.M)("Connect to Twitter")) + "\x3c/span\x3e\x3c/button\x3e");
};
var Qca = function() {
  return (0,z.M)("\x3cp\x3e" + z.P((0,z.M)("We’re sorry to see you go. Your request may take a few days to process; we want to double check things before hitting the big red button. Requesting an account deletion will permanently remove all of your content: your profile, posts, publications, notes, and follow-ups. If you’ve changed your mind about deleting your account, you can always hit cancel and deactivate instead.")) + '\x3c/p\x3e\x3ctextarea class\x3d"textInput textInput--textarea u-sizeFullWidth js-requestDeleteAccountReason" placeholder\x3d"Tell us why you want to delete your account (optional)" autofocus\x3d"autofocus"\x3e\x3c/textarea\x3e');
};
var P9 = function(a, b) {
  z.MQ.call(this, a, b);
  this.S = a.get("dialog");
  this.Vs = b.userId;
  this.CS = b.hash;
};
var Q9 = function(a, b) {
  var c;
  try {
    c = "number" == typeof a.selectionStart;
  } catch (d) {
    c = !1;
  }
  c ? (a.selectionStart = b, a.selectionEnd = b) : z.Qd && (c = b, "textarea" == a.type && (c = a.value.substring(0, c).replace(/(\r\n|\r|\n)/g, "\n").length), b = c, c = a.createTextRange(), c.collapse(!0), c.move("character", b), c.select());
};
var R9 = function(a, b, c) {
  z.MQ.call(this, a, b);
  this.pa = a.get("app");
  this.S = a.get("dialog");
  this.VH = a.get("butter-bar");
  this.Sa = a.get("listStore");
  this.Rg = z.Mi();
  this.qa = a.get("routeBuilder");
  this.N = a.get("request");
  this.TA = this.RA = "";
  this.yI = !1;
  this.Fx = c && c.WO ? c.WO : null;
};
var S9 = function(a) {
  z.u(a.ZH, "u-hide");
  z.u(a.WH, "u-hide");
  z.v(a.gv, "u-hide");
  a.Mj.disabled = !0;
  a.Mj.blur();
};
var Rca = function(a) {
  Ica(function() {
    this.yI = !0;
    var a = window.document.querySelector(".button--facebook");
    a && a.removeAttribute("disabled");
  }, a);
};
var Sca = function(a, b) {
  if (b.oauth_token && b.oauth_verifier) {
    var c = window.document.querySelector(".button--twitter"), d = window.document.querySelector(".button-label--twitter");
    c.setAttribute("disabled", !0);
    d.innerText = (0,z.M)("Connecting…");
    var e = new z.vd(z.w(a.qa, z.S0));
    z.t(z.q(a.N.post(e, {oauthRequestToken:b.oauth_token, oauthRequestTokenVerifier:b.oauth_verifier}, {oa:!0}), function(a) {
      this.Rg.uj(a.username);
      var b = window.document.querySelector(".list-itemActions--twitter");
      z.$v(b, O9, {dA:a, facebookDisplayName:this.Rg.facebookDisplayName});
      T9(this);
    }, a), function(a) {
      c.removeAttribute("disabled");
      d.innerText = (0,z.M)("Connect to Twitter");
      switch(a.status) {
        case 409:
          a = (0,z.M)("It looks like this Twitter account is already connected to another Medium account.");
          break;
        default:
          a = (0,z.M)("Sorry, we had a problem while trying connect your Twitter account. Please try again later.");
      }
      this.S.error(a);
      T9(this);
    }, a);
  }
};
var T9 = function(a) {
  a = a.Rg;
  var b = !!a.twitterScreenName, c = window.document.querySelector(".button--facebookDelete");
  c && z.od(c, "u-hide", !b);
  (c = window.document.querySelector(".button--disconnectFacebookHelp")) && z.od(c, "u-hide", b);
  a = !!a.facebookDisplayName;
  (b = window.document.querySelector(".button--twitterDelete")) && z.od(b, "u-hide", !a);
  (b = window.document.querySelector(".button--disconnectTwitterHelp")) && z.od(b, "u-hide", a);
};
var U9 = function(a, b) {
  this.jI = b;
  this.kj = a;
  this.BV = z.bq.clone(this.kj);
  this.strategy = "resample";
};
var V9 = function(a, b) {
  var c = {imageId:b.Ba()}, d = b.fk(), e = b.Ql();
  if ("object" == typeof a.strategy) {
    d = a.strategy["*"] || a.strategy[d];
    c.strategy = d.type;
    for (var g in d) {
      c[g] = d[g];
    }
  } else {
    c.strategy = a.strategy;
  }
  e && (c.filter = e);
  return c;
};
var W9 = function(a, b, c) {
  a.kj.Eo(b).Do(c);
};
var X9 = function(a, b, c, d, e) {
  this.Be = a.get("element-tracker");
  this.Zk = a.get("image");
  this.Zm = a.get("loading-indicator");
  this.Ab = b;
  this.element = c;
  this.Ia = d;
  this.yd = e;
  this.rv = this.element.querySelector("[data-scroll]");
};
var Y9 = function(a) {
  for (var b = a.Ia.fk() == Z9 ? [Z9] : [Tca, Uca], c = 0;c < b.length;c++) {
    var d = a.Ia.Kt(a.Ia.Na().Ao(b[c]));
    a.Zk.load(d);
  }
};
var $9 = function(a) {
  var b = a.Ia.BV;
  b.Ba() ? (a.ge(b.Ba()), W9(a.Ia, b.af(), b.gj()), a$(a, a.Ia.lk())) : a.ge("");
};
var Vca = function(a) {
  if (a.Ia.Ba()) {
    var b = a.Ia.lk();
    a.Zm.track(z.Uc(a.Zk.load(b), function() {
      a$(this, b);
    }, a));
  }
};
var a$ = function(a, b) {
  if (b != a.Ia.jI) {
    var c = a.fF();
    a.Ia.jI = b || "";
    b ? (a.yO(c, b), (c = c.parentNode) && "blur-cover" == c.getAttribute("data-scroll") && (c.setAttribute("data-image-url", b), c.setAttribute("data-image-blur-url", a.Ia.lk(!0)))) : (a.DM(c), W9(a.Ia, 0, 0));
    a.Be.Dh();
    a.Ab.Q(Wca);
  }
};
var b$ = function(a, b) {
  z.Wx.call(this);
  this.ob = a;
  this.Zj = b;
};
var c$ = function(a, b) {
  z.Ux.call(this);
  this.ob = b;
  this.Ia = a;
  this.yd = d$;
  this.FA = z.ad();
};
var e$ = function(a) {
  this.ob = a;
};
var f$ = function(a, b) {
  z.Ux.call(this);
  this.mh = a.get("upload");
  this.Bn = b;
  this.Sp = [];
};
var g$ = function(a, b, c, d, e, g) {
  this.Zk = a.get("image");
  this.S = a.get("dialog");
  this.Ab = b;
  this.Dp = c.querySelector(".progressBar");
  this.Cp = new e$(c.querySelector(".uploadFeedback-preview"));
  this.Ia = d;
  this.yr = g;
  this.yd = e;
  this.Og = new f$(a, function(a) {
    return this.Ia.Kt(z.bq.clone(this.Ia.kj).bd(a));
  }.bind(this));
  this.Og.J("start", this.oV, this);
  this.Og.J("progress", this.nV, this);
  this.Og.J("success", this.kV, this);
  this.Og.J("error", this.lV, this);
  this.Og.J("abort", this.jV, this);
  this.Og.J("preview", this.mV, this);
};
var h$ = function(a, b, c, d) {
  z.Wx.call(this);
  this.X = a;
  this.Ia = c;
  this.yr = d;
  this.ob = b;
};
var i$ = function(a, b) {
  z.mJ.call(this);
  this.element = b;
  this.Ia = this.qE(z.$y(b) || new z.Ui, b.getAttribute("data-url"));
  this.state = new c$(this.Ia, b);
  this.Nl = this.yL(a, this, b, this.Ia, this.state);
  this.Zj = this.zL(a);
  this.track(new b$(b, this.Zj));
  this.track(new h$(a, b, this.Ia, this.Nl));
  this.state.reset();
};
var Xca = function(a) {
  z.q(a.abort(), function() {
    this.Nl.ge("");
    this.Zj.Cp.reset();
  }, a);
};
var j$ = function(a, b, c) {
  this.ZX = c || b;
  i$.call(this, a, b);
};
var k$ = function(a, b, c, d, e, g) {
  g$.call(this, a, b, c, d, e, g);
  this.ob = c;
  this.Og.J("start", this.lX, this);
  this.Og.J("success", this.ZC, this);
  this.Og.J("error", this.ZC, this);
  this.Og.J("abort", this.ZC, this);
};
var l$ = function(a, b) {
  U9.call(this, a, b);
};
var m$ = function(a, b, c, d, e) {
  X9.call(this, a, b, c, d, e);
};
var n$ = function(a, b, c) {
  this.BD = !!c;
  i$.call(this, a, b);
};
var o$ = function(a, b, c) {
  U9.call(this, a, b);
  this.BD = c;
};
var p$ = function(a, b, c, d, e) {
  X9.call(this, a, b, c, d, e);
};
var q$ = function(a, b) {
  z.Wx.call(this);
  this.N = a.get("request");
  this.S = a.get("dialog");
  this.za = a.get("screen");
  this.Zb = b;
  this.Mh = null;
  this.Gj = {};
  this.Gr = {};
  this.Fv = {};
  this.Kd = r$;
};
var s$ = function(a) {
  var b = a.Gj[a.Kd] ? Math.ceil(a.Gj[a.Kd].length / 8) : 0, b = z.C0.U({username:a.Zb.username}, {listType:a.Kd, page:b});
  return a.N.get(b, {oa:!0});
};
var t$ = function(a) {
  var b = {title:"following" == a.Kd ? (0,z.M)(z.L(a.Zb.name) + " follows") : (0,z.M)(z.L(a.Zb.name) + " is followed by"), bodyHtml:z.Zv(z.XP, {users:a.Gj[a.Kd]}), type:z.xP}, b = a.S.open(b);
  if (a.Gj[a.Kd].length >= a.Fv[a.Kd]) {
    var c = b.query(".js-buttonMoreFollows");
    z.u(c, "u-hide");
  }
  a.Gr[a.Kd] || (a.Gr[a.Kd] = {});
  for (var c = a.Gj[a.Kd], d = 0;d < c.length;d++) {
    a.Gr[a.Kd][c[d].userId] = !0;
  }
  z.RC(b.ca()).H("load-more-follows", a.cC, a);
  z.fx(z.V2, {profileId:a.Zb.userId, followListType:a.Kd});
};
z.G5 = function(a, b, c) {
  var d = "";
  b = !(null == a.post ? 0 : a.post.latestPublishedVersion);
  var e = a.post ? a.post.virtuals.subtitle : "", g = null == a.post ? null : a.post.virtuals.snippet, h = "" + ((null == a.post ? 0 : null == a.post.virtuals.previewImage ? 0 : a.post.virtuals.previewImage.imageId) && !b ? z.R(z.Yt({imageId:a.post.virtuals.previewImage.imageId, filter:a.post.virtuals.previewImage.filter, strategy:"crop-fixed", width:140, height:110}, 0, c)) : ""), h = (0,z.S)(h), k = "" + (a.post ? z.R(z.Ct(a, 0, c)) : "#"), k = (0,z.S)(k), l = a.post.title ? a.post.title : "Untitled story", 
  d = d + ('\x3cdiv class\x3d"block block--list block--inset postItem' + (h ? "" : " block--withoutImage") + '"' + (a.post ? ' data-post-id\x3d"' + z.Q(a.post.id) + '"' : "") + "\x3e" + (h ? '\x3ca href\x3d"' + z.Q(z.R(k)) + '" data-action\x3d"open-post" data-action-value\x3d"' + z.Q(k) + '" class\x3d"block-image" style\x3d"background-image:url(' + z.Q(z.R(h)) + ')"\x3e\x3c/a\x3e' : "") + '\x3cdiv class\x3d"block-firefoxPositioningContainerHack"\x3e\x3cdiv class\x3d"block-content"\x3e\x3ch3 class\x3d"block-title"\x3e\x3ca href\x3d"' + 
  z.Q(z.R(k)) + '" data-action\x3d"open-post" data-action-value\x3d"' + z.Q(k) + '"\x3e' + z.L(l) + "\x3c/a\x3e\x3c/h3\x3e" + (a.post && !b ? e ? '\x3ca class\x3d"block-snippet block-snippet--subtitle" href\x3d"' + z.Q(z.R(k)) + '" data-action\x3d"open-post" data-action-value\x3d"' + z.Q(k) + '"\x3e' + z.L(e) + "\x3c/a\x3e" : g ? '\x3ca class\x3d"block-snippet block-snippet--subtitle" href\x3d"' + z.Q(z.R(k)) + '" data-action\x3d"open-post" data-action-value\x3d"' + z.Q(k) + '"\x3e' + z.P(z.mv(String(g))) + 
  "\x3c/a\x3e" : "" : '\x3cspan class\x3d"block-line"\x3e\x3c/span\x3e') + '\x3cdiv class\x3d"u-clearfix block-postMetaWrap"\x3e' + z.P(z.CL(z.O(a, {OO:"bottom"}), c)) + (a.post.visibility == c.constants.ye.Hi ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e' : ""));
  b ? (e = z.O(a, {message:a.post.virtuals.readingTime ? "Last edited" : "Created"}), e = (0,z.M)('\x3cspan class\x3d"postMetaInline postMetaInline--collectionSubmission"\x3e' + (e.message ? z.L(e.message) + " " + z.L(e.post.virtuals.updatedAtRelative) : e.post.latestPublishedVersion ? "Submitted " + z.L(e.post.virtuals.proposedAtRelative) : "Draft edited " + z.L(e.post.virtuals.updatedAtRelative)) + "\x3c/span\x3e"), d += z.L(e)) : d += '\x3cspan class\x3d"postMetaInline"\x3ePublished\x3c/span\x3e ' + 
  z.P(z.BL(a));
  d += (a.post.virtuals.readingTime ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e\x3cspan class\x3d"postMetaInline"\x3e' + z.P(z.sL({readingTime:a.post.virtuals.readingTime}, 0, c)) + (b ? " " + (0 < a.post.virtuals.wordCount ? "(" + z.P((0,z.M)((null == a.post.virtuals ? 0 : a.post.virtuals.wordCount) ? z.P(z.V5({wordCount:a.post.virtuals.wordCount})) : "")) + ")" : "") + " so far" : "") + "\x3c/span\x3e" : "") + (a.post.inResponseToPost ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e' : 
  "") + z.P((0,z.M)(a.post.inResponseToPost ? '\x3cspan class\x3d"postMetaInline"\x3eIn response to ' + z.P(z.jK({post:a.post.inResponseToPost}, c)) + "\x3c/span\x3e" : "")) + (a.post.homeCollection ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e\x3cspan class\x3d"postMetaInline"\x3e' + z.P(z.rL(z.O(a, {VG:!0, separator:"In "}), c)) + "\x3c/span\x3e" : "") + (!b && a.post.hasUnpublishedEdits ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e\x3cspan class\x3d"postMetaInline" data-tooltip-position\x3d"bottom" data-tooltip\x3d"' + 
  z.Q(z.fE()) + '"\x3e' + z.P((0,z.M)("Unpublished changes")) + "\x3c/span\x3e" : "") + (c.variants.enable_your_stories_more_actions ? '\x3cspan class\x3d"middotDivider"\x3e\x3c/span\x3e' + z.P(z.qL(a, c)) : "") + "\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e";
  return (0,z.M)(d);
};
var u$ = function(a, b, c) {
  b = "";
  var d = z.M, e = '\x3cdiv class\x3d"coverPicker coverPicker--headerBleed js-profileCoverPicker ' + (a.user.backgroundImageId ? "" : "is-withoutImage") + '" data-image-id\x3d"' + (a.user.backgroundImageId ? z.Q(a.user.backgroundImageId) : "") + '" data-url\x3d"' + z.Q(z.R(H9({image:{imageId:a.user.backgroundImageId}}, 0, c))) + '" data-washable\x3d"false"\x3e', g;
  g = {size:"header", image:{imageId:a.user.backgroundImageId}};
  var h = "", k = "" + (g.m_ ? I9(g, 0, c) : H9(g, 0, c)), k = (0,z.S)(k), l = "" + (g.m_ ? I9(z.O(g, {bm:!0}), 0, c) : H9(z.O(g, {bm:!0}), 0, c)), l = (0,z.S)(l), h = h + ('\x3ccanvas class\x3d"canvas-renderer"\x3e\x3c/canvas\x3e\x3cdiv class\x3d"imageBleed imageBleed--' + z.Q(g.size) + '"' + (k && l ? 'data-scroll\x3d"blur-cover" data-image-url\x3d"' + z.Q(z.R(k)) + '" data-image-blur-url\x3d"' + z.Q(z.R(l)) + '"' : "") + '\x3e\x3cdiv class\x3d"imageBleed-src imagePicker-target"' + (k ? "style\x3d\"background-image: url('" + 
  z.Q(z.R(k)) + "')\"" : "") + "\x3e\x3c/div\x3e\x3c/div\x3e");
  g = (0,z.M)(h);
  e = e + z.L(g) + '\x3cdiv class\x3d"coverPicker-controls"\x3e';
  g = {};
  g = (0,z.M)('\x3cdiv class\x3d"uploadFeedback" data-action\x3d"dummy"\x3e\x3cdiv class\x3d"uploadFeedback-preview"\x3e\x3c/div\x3e\x3cdiv class\x3d"uploadFeedback-inner"\x3e\x3cdiv class\x3d"progressBar-wrap"\x3e\x3cdiv class\x3d"progressBar"\x3e\x3c/div\x3e\x3c/div\x3e' + (g.X9 ? "" : '\x3cbutton data-action\x3d"cancel-upload" class\x3d"button button--chromeless button--light button--cancel"\x3e\x26#215;\x3c/button\x3e') + "\x3c/div\x3e\x3c/div\x3e");
  d = d(e + z.L(g) + z.P(E9({mb:!0})) + "\x3c/div\x3e\x3c/div\x3e") + '\x3cdiv class\x3d"u-sizeFullHeight u-clearfix"\x3e';
  e = "" + z.P(z.eM(z.O(a, {mb:a.user.backgroundImageId, Nd:(0,z.T)('\x3cdiv class\x3d"buttonSet buttonSet--profile"\x3e' + (c.currentUser.userId == a.user.userId ? z.P(z.QJ({title:"Edit profile", xa:"button--edit", action:"edit-profile", na:"Edit profile"}, c)) + z.P(z.QJ({title:"Remove profile background image", xa:"button--remove", action:"remove-image", na:"Remove background"}, c)) + z.P(z.QJ({title:"Cancel edits", xa:"button--cancel", action:"cancel-edit", na:"Cancel"}, c)) + z.P(z.QJ({title:"Save profile", 
  isPrimary:!0, xa:"button--save", action:"save-profile", na:"Save"}, c)) : "") + z.P(z.$J({title:"Save profile", dg:!0, Eg:!0, action:"embed-profile", icon:"icon--embed"}, c)) + "\x3c/div\x3e" + z.P(z.ZL(null, c)))}), c));
  e = (0,z.M)(e);
  d = d + e + '\x3cdiv class\x3d"u-backgroundWhite u-foreground"\x3e';
  e = c.isAuthenticated && c.currentUser.userId == a.user.userId;
  e = "" + ('\x3cheader class\x3d"hero hero--profile layoutSingleColumn"\x3e\x3cdiv class\x3d"hero-avatar js-profileAvatar"\x3e\x3cdiv class\x3d"coverPicker-controls"\x3e' + z.P(E9({mb:!0, VZ:!0})) + "\x3c/div\x3e" + z.P(G9({user:a.user, cj:!0, Rf:"zoom", Pa:a.user.imageId, CF:!0}, 0, c)) + '\x3c/div\x3e\x3ch1 class\x3d"hero-title"\x3e' + z.P(z.gK({user:a.user, Xy:!0}, c)) + '\x3c/h1\x3e\x3cp class\x3d"hero-description"\x3e' + (null != a.user.bio ? z.P(z.nv(String(a.user.bio))) : "") + "\x3c/p\x3e" + 
  z.P(z.WP(z.O(a, {socialStats:a.user.socialStats, user:a.user}), c)) + (!e && c.variants.can_follow_users ? '\x3cdiv class\x3d"hero-actions buttonSet"\x3e' + z.P(z.vL(z.O(a, {mb:!1, sq:!0}), c)) + "\x3c/div\x3e" : "") + "\x3c/header\x3e");
  e = (0,z.M)(e);
  d += z.L(e);
  e = a || {};
  a = z.M;
  if (c.variants.streamy_profile && e.latestPosts) {
    g = '\x3cdiv class\x3d"js-featuredPostBlock"\x3e' + (c.variants.feature_post_on_profile && e.featuredPost ? z.P(z.JL({count:1, Pb:!0, yb:!0, name:"featured story", posts:[e.featuredPost], Td:[e.aM], user:e.user, source:"featured"}, 0, c)) : e.recommendedPosts.length ? z.P(z.JL({count:1, Pb:!0, yb:!0, name:"most recommended story", posts:e.recommendedPosts, Td:e.ZN, user:e.user, source:"most-recommended"}, 0, c)) : "") + "\x3c/div\x3e" + (e.latestPosts.length ? z.P(z.JL({count:3, Pb:!0, yb:!0, 
    name:"latest stories", posts:e.latestPosts, Td:e.jz, source:"latest", user:e.user}, 0, c)) : "");
    if (c.variants.profile_interstitial) {
      h = e || {};
      k = "";
      if (null == h.collections ? 0 : h.collections.length) {
        for (var l = "", n = h.collections.length, r = 0;r < n;r++) {
          l += '\x3cdiv class\x3d"layoutMultiColumn layoutMultiColumn--padded layoutMultiColumn--third layoutMultiColumn--fixed"\x3e' + z.P(z.rN({collection:h.collections[r], post:h.latestPostsForCollections[r], source:z.mr("profile-" + h.user.userId)}, c)) + "\x3c/div\x3e";
        }
        k += v$({tk:(0,z.S)("" + z.R(z.Rt(h, c))), title:"Publications edited by " + h.user.name, bi:(0,z.T)(l)}, c);
      }
      h = (0,z.M)(k) + (3 < e.latestPosts.length ? z.P(z.JL(z.O(e, {startIndex:3, count:3, Pb:!0, yb:!0, lm:!0, posts:e.latestPosts, Td:e.jz, source:"latest", user:e.user}), 0, c)) : "");
      n = e || {};
      k = z.M;
      if (null == n.postsRecommendedByUser ? 0 : n.postsRecommendedByUser.length) {
        var l = "" + z.P(z.XL({title:"Recommended by " + n.user.name, bz:!0, Nd:(0,z.T)("" + z.P(z.WL({href:(0,z.S)("" + z.R(z.Qt(n, c)))}, c)))})), n = {items:n.postsRecommendedByUser, bo:"postTitle", limit:6, Py:"icon--heart", AZ:!0}, r = "", y = n.limit ? Math.min(n.items.length, n.limit) : n.items.length, r = r + ('\x3cdiv class\x3d"layoutMultiColumn layoutMultiColumn--padded layoutMultiColumn--half"\x3e' + z.EL(z.O(n, {count:y / 2, ez:!0}), c) + '\x3c/div\x3e\x3cdiv class\x3d"layoutMultiColumn layoutMultiColumn--padded layoutMultiColumn--half u-sm-hide"\x3e' + 
        z.EL(z.O(n, {count:y / 2, ez:!0, startIndex:Math.ceil(y / 2)}), c) + "\x3c/div\x3e"), n = (0,z.M)(r), l = v$({bi:(0,z.T)(l + z.L(n))}, c)
      } else {
        l = "";
      }
      k = k(l);
      h += k;
    } else {
      h = w$(e, c) + x$(e, c);
    }
    k = c.variants.profile_interstitial ? 6 : 3;
    c = g + h + ('\x3cdiv class\x3d"blockGroup-last"\x3e' + (e.latestPosts.length > k ? z.P(z.JL({count:e.latestPosts.length, yb:!0, Pb:!0, name:"earlier stories", posts:e.latestPosts, source:"latest", startIndex:k, lm:c.variants.profile_interstitial, user:e.user, Td:e.jz}, 0, c)) : "") + "\x3c/div\x3e");
    c = (0,z.M)(c);
  } else {
    if (e.latestPosts) {
      c = (0,z.M)('\x3cdiv class\x3d"js-featuredPostBlock"\x3e' + (c.variants.feature_post_on_profile && e.featuredPost ? z.P(z.JL({user:e.user, count:1, name:"featured by author", posts:[e.featuredPost], Td:[e.aM], Pb:!0, df:!0, source:"featured"}, 0, c)) : e.recommendedPosts.length ? z.P(z.JL({user:e.user, count:1, source:"most-recommended", posts:e.recommendedPosts, Td:e.ZN, Pb:!0, df:!0}, 0, c)) : "") + "\x3c/div\x3e" + (e.latestPosts.length ? z.P(z.JL({user:e.user, count:3, source:"latest", 
      posts:e.latestPosts, Pb:!0, yb:!0, tk:(0,z.S)("" + z.R((0,z.Et)(z.R(z.Gt(c.authBaseUrl, "PROFILE_LATEST", null, null, e.user))))), Td:e.jz}, 0, c)) : "") + w$(e, c) + '\x3cdiv class\x3d"blockGroup-last"\x3e' + x$(e, c) + "\x3c/div\x3e" + (e.collections.length || e.latestPosts.length || e.postsRecommendedByUser.length ? "" : z.P(z.PL({tm:(0,z.T)(z.L(e.user.name) + " hasn’t written any stories yet."), Cz:(0,z.T)('Read other stories on your \x3ca class\x3d"link link--accent" href\x3d"/"\x3eReading list\x3c/a\x3e.')}))))
      ;
    } else {
      g = '\x3cdiv class\x3d"blockGroup-last"\x3e';
      if (e.posts) {
        h = "";
        switch(e.filterBy) {
          case "has-recommended":
            h += "Recommended by " + z.L(e.user.name);
            break;
          case "recommended":
            h += "Most recommended";
            break;
          case "unlisted":
            h += "Unlisted";
            break;
          case "private":
            h += "Private";
            break;
          default:
            h += "Latest";
        }
        g += z.P(z.JL({user:e.user, count:e.posts.length, source:e.filterBy, name:(0,z.T)(h), posts:e.posts, Td:e.Td, Pb:!0, yb:!0}, 0, c));
      } else {
        e.collections && (g += z.P(z.UP(z.O(e, {label:"Publications edited by " + e.user.name, Yz:!0}), 0, c)));
      }
      c = (0,z.M)(g + "\x3c/div\x3e");
    }
  }
  c = a(c);
  return (0,z.M)(b + (d + c + "\x3c/div\x3e\x3c/div\x3e"));
};
var x$ = function(a, b) {
  a = a || {};
  return (0,z.M)((null == a.postsRecommendedByUser ? 0 : a.postsRecommendedByUser.length) ? z.P(z.JL({user:a.user, count:3, source:"has-recommended", name:"Recommended by " + a.user.name, posts:a.postsRecommendedByUser, Pb:!0, yb:!0, tk:(0,z.S)("" + z.R(z.Qt(a, b)))}, 0, b)) : "");
};
var w$ = function(a, b) {
  a = a || {};
  return (0,z.M)((null == a.collections ? 0 : a.collections.length) ? z.P(z.UP(z.O(a, {Yz:!0, count:3, label:"Publications edited by " + a.user.name, tk:(0,z.S)("" + z.R(z.Rt(a, b)))}), 0, b)) : "");
};
var y$ = function(a, b, c) {
  a = a || {};
  var d = a.userPostCounts ? a.userPostCounts.draftPosts : 0, e = a.userPostCounts ? a.userPostCounts.publicPosts : 0, g = a.userPostCounts ? a.userPostCounts.unlistedPosts : 0, h = a.userPostCounts ? a.userPostCounts.privatePosts : 0, k = c.supportsEdit ? "" : "u-hide", l = h && "0" != h ? "" : "u-hide";
  b = "";
  var n;
  n = z.O(a, {title:"Your stories"});
  n = (0,z.M)('\x3cheader class\x3d"hero hero--standalone hero--compact hero--alignLeft layoutSingleColumn layoutSingleColumn--wide' + (n.E$ ? " hero--underline" : "") + '"\x3e\x3ch1 class\x3d"hero-title"\x3e' + z.L(n.title) + "\x3c/h1\x3e" + (n.Qx ? '\x3cdiv class\x3d"hero-actions buttonSet"\x3e' + z.L(n.Qx) + "\x3c/div\x3e" : "") + (c.supportsEdit ? '\x3cdiv class\x3d"buttonSet u-floatRight"\x3e' + z.P(z.VJ({xa:"button--importStory", na:(0,z.T)("" + z.P((0,z.M)("Import a story"))), href:(0,z.S)("" + 
  z.R(z.Lt(c)))}, c)) + z.P(z.bK({isPrimary:!0, xa:"button--newStory"}, c)) + "\x3c/div\x3e" : "") + "\x3c/header\x3e");
  d = z.L(n) + '\x3cdiv class\x3d"u-sizeFullHeight u-clearfix"\x3e' + z.P(z.eM(z.O(a, {Wt:!0}), c)) + z.P(z.QL(z.O(a, {Gg:!0, Ou:[{name:"Drafts", count:d, hd:"drafts" == a.filterBy, href:"/me/stories/drafts", className:k}, {name:"Public", count:e, hd:"public" == a.filterBy, href:"/me/stories/public"}, {name:"Unlisted", count:g, hd:"unlisted" == a.filterBy, href:"/me/stories/unlisted"}, {name:"Private", count:h, hd:"private" == a.filterBy, href:"/me/stories/private", className:l}, {name:"Publications", 
  hd:"publications" == a.filterBy, href:"/me/stories/publications"}]}), c)) + '\x3cdiv class\x3d"u-backgroundWhite u-foreground"\x3e';
  if ("publications" == a.filterBy) {
    l = '\x3cdiv class\x3d"list list--bordered"\x3e';
    a = a.collectionRelations.collectionUserRelationItems;
    e = a.length;
    for (g = 0;g < e;g++) {
      n = a[g];
      h = n.collection;
      k = h.creatorId == c.currentUser.userId;
      n = "" + (k ? "You own this publication." : "You are " + ("ADMIN" == n.role ? "an editor" : "a writer") + ".");
      n = (0,z.T)(n);
      var r = c;
      n = (0,z.M)(z.kL(z.O({collection:h, jL:n}, {width:40, height:40, bf:"avatar-image avatar-image--smallWithText avatar-image--roundedRectangle u-floatLeft"}), r));
      l += '\x3csection class\x3d"list-item collection-item"\x3e\x3cdiv class\x3d"u-clearfix"\x3e\x3cdiv class\x3d"u-floatLeft"\x3e' + z.L(n) + "\x3c/div\x3e" + (k ? "" : '\x3cdiv class\x3d"u-floatRight"\x3e\x3cbutton class\x3d"button button--delete button--chromeless" data-action\x3d"remove-role" data-action-value\x3d"' + z.Q(h.slug) + '"\x3eLeave publication\x3c/button\x3e\x3c/div\x3e') + "\x3c/div\x3e\x3c/section\x3e";
    }
    c = (0,z.M)(l + "\x3c/div\x3e");
    c = '\x3cdiv class\x3d"layoutSingleColumn layoutSingleColumn--wide"\x3e' + z.L(c) + "\x3c/div\x3e";
  } else {
    e = {count:a.posts.length, posts:a.posts};
    g = '\x3cdiv class\x3d"blockGroup blockGroup--compact blockGroup--inset blockGroup--list js-blockGroupPosts" data-count\x3d"' + z.Q(e.count) + '" data-margin\x3d"inset"\x3e\x3cdiv class\x3d"blockGroup-list layoutSingleColumn layoutSingleColumn--wide"\x3e';
    h = e.posts.length;
    for (k = 0;k < h;k++) {
      g += (null == e.posts ? 0 : e.posts[k]) ? z.G5(z.O(e, {source:"your-stories", post:e.posts[k]}), 0, c) : "";
    }
    e = (0,z.M)(g + "\x3c/div\x3e\x3c/div\x3e");
    c = '\x3cdiv class\x3d"blockGroup-last"\x3e' + z.L(e) + "\x3c/div\x3e" + (0 == a.posts.length ? z.P(z.PL({tm:(0,z.T)("" + ("drafts" == a.filterBy ? z.P((0,z.M)("You have no drafts yet.")) : "public" == a.filterBy ? z.P((0,z.M)("You haven’t published any public stories yet.")) : "unlisted" == a.filterBy ? z.P((0,z.M)("You haven’t published any unlisted stories yet.")) : "")), Cz:(0,z.T)("" + ("drafts" == a.filterBy && c.supportsEdit ? z.P((0,z.M)('Looking for ideas? Try one of the \x3ca class\x3d"link link--primary" href\x3d"https://medium.com/weekly-writing-prompts"\x3ewriting prompts\x3c/a\x3e.')) : 
    "unlisted" == a.filterBy ? z.P((0,z.M)("Unlisted stories are not listed on your profile and do not appear in search results. Only people with the link to an unlisted story can view it.")) : ""))})) : "");
  }
  return (0,z.M)(b + (d + c + "\x3c/div\x3e\x3c/div\x3e"));
};
var Yca = function(a, b, c) {
  return (0,z.M)('\x3cul class\x3d"list list--borderless list--short"\x3e' + (c.variants.feature_post_on_profile && c.currentUser.userId == a.post.creatorId ? '\x3cli class\x3d"list-item"\x3e' + (a.isFeatured ? '\x3ca class\x3d"button button--chromeless" data-action\x3d"unfeature-post" \x3eStop featuring on your profile\x3c/a\x3e' : '\x3ca class\x3d"button button--chromeless" data-action\x3d"feature-post" data-action-value\x3d"' + z.Q(a.post.id) + '" \x3eFeature at the top of your profile\x3c/a\x3e') + 
  "\x3c/li\x3e" : "") + "\x3c/ul\x3e");
};
var Zca = function(a, b, c) {
  return (0,z.M)('\x3cdiv class\x3d"onboardingText"\x3e\x3cdiv class\x3d"onboardingText-title"\x3eFeature any story on your profile\x3c/div\x3eUse the \x3cspan class\x3d"icon icon--arrowDownThin"\x3e\x3c/span\x3e menu to pin your favorite story to the top.\x3c/div\x3e' + z.P(z.QJ({na:"OK", action:"post-actions", Pa:a.post.id, isPrimary:!0, Je:!0, xa:"js-onboardingGotItButton"}, c)));
};
var v$ = function(a, b) {
  a = a || {};
  return (0,z.M)('\x3cdiv class\x3d"interstitial interstitial--profile"\x3e\x3cdiv class\x3d"layoutSingleColumn"\x3e' + (a.title ? '\x3ch1 class\x3d"interstitial-title interstitial-title--cards"\x3e' + (a.tk ? z.P(z.cK({href:a.tk, na:a.title}, b)) : z.L(a.title)) + "\x3c/h1\x3e" : "") + '\x3cdiv class\x3d"interstitial-cardsWrapper"\x3e' + z.L(a.bi) + "\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e");
};
var z$ = function(a, b) {
  z.zO.call(this, a);
  this.Sa = a.get("listStore");
  this.Ea = z.BO(this, "butter-bar");
  this.cb = a.get("dom-monitor");
  this.Be = a.get("element-tracker");
  this.ra = a.get("modelStore");
  this.Aa = a.get("popover");
  this.N = a.get("request");
  this.QC = a.get("routeManager").Wl(b.path);
  this.sg = b.path;
  this.Wh = b.username ? z.ZU(b.username) : "";
  this.Lf = this.QC.path.split("/")[2] || "overview";
  this.dJ = "overview" === this.Lf;
  this.$v = !!z.x.sa().streamy_profile;
  this.Qr = !!z.x.sa().casual_content_viewer;
  this.mR = !!z.x.sa().feature_post_on_profile && !z.Ri().isMobile && !z.Ri().isTablet;
  this.pp = !1;
  this.CK = "publications" != this.Lf;
  z.Iv.U({username:this.Wh});
  this.NA = this.OA = this.nv = this.cp = "";
  this.Lv = !1;
  this.S = a.get("dialog");
};
var A$ = function(a) {
  a.pp = !1;
  z.v(window.document.body, "editing");
  var b = a.query(".hero-title");
  z.Oe(b);
  b.appendChild(window.document.createTextNode(a.cp));
  a.query(".hero-description").innerHTML = z.nv(a.nv);
  a.$g.fb();
  a.Pf.fb();
  a.gc.fb();
  a.zj.fb();
  z.fn(a.$g);
  z.fn(a.Pf);
  z.fn(a.gc);
  z.fn(a.zj);
  a.$g = null;
  a.Pf = null;
  a.gc = null;
  a.zj = null;
};
var B$ = function(a) {
  var b = a.Ka();
  a.pp = !0;
  z.u(window.document.body, "editing");
  a.gc || (a.gc = new z.fJ(a.query(".hero-title"), "Enter your name"), a.gc.R(), a.gc.Ja(new z.pF(25, !1)), a.gc.Ja(new z.nF(25)), a.gc.kc(a.gc.Na()));
  a.zj || (a.zj = new z.fJ(a.query(".hero-description"), "Enter a short bio"), a.zj.R(), a.zj.Ja(new z.pF(160, !1)), a.zj.Ja(new z.nF(160)));
  a.Pf || (a.Pf = new n$(b, a.query(".coverPicker")), a.Pf.R(), a.Pf.J(C$, a.oI, a), a.Pf.J(D$, a.Pm, a), a.Pf.J(E$, a.Pm, a), a.Pf.J(F$, a.Pm, a), a.Pf.J(F$, a.fX, a));
  a.$g || (a.$g = new j$(b, a.query(".js-profileAvatar"), a.query(".js-profileCoverPicker")), a.$g.R(), a.$g.J(C$, a.oI, a), a.$g.J(D$, a.Pm, a), a.$g.J(E$, a.Pm, a), a.$g.J(F$, a.Pm, a));
  a.gc.focus();
};
var G$ = function(a) {
  if (a.pp) {
    var b = a.gc.Na(), c = a.zj.Na(), d = H$(a), e = I$(a), g = b !== a.cp, h = c !== a.nv;
    a.Lv = d != a.OA;
    var k = e != a.NA;
    if (g || h || a.Lv || k) {
      return g = {}, g.name = b, g.bio = c, a.Lv && (g.backgroundImageId = d), k && (g.kL = e), g;
    }
  }
};
var H$ = function(a) {
  return (a = a.Pf.Na()) && a.Ba() || "";
};
var I$ = function(a) {
  return (a = a.$g.Na()) && a.Ba() || "";
};
var J$ = function(a, b) {
  var c = a.query(".js-featuredPostBlock");
  if (c) {
    var d = {count:1, Pb:!0, yb:a.$v, df:!a.$v, user:a.Zb};
    a.Mi = b;
    z.zZ(a.Aa);
    if (b) {
      d.name = "featured by author", d.source = "featured", d.posts = [b], a.Qr && (d.Td = z.sM([b], z.x));
    } else {
      if (d.source = "most-recommended", d.posts = a.rl, a.Qr && (d.Td = z.sM(a.rl, z.x)), !a.rl) {
        c.innerHTML = "";
        return;
      }
    }
    z.$v(c, z.JL, d);
  } else {
    z.BO(a, "app").navigate(z.Iv.U({username:a.Zb.username}));
  }
};
var K$ = function(a, b) {
  z.zO.call(this, a);
  this.Ea = z.BO(this, "butter-bar");
  this.Sa = a.get("listStore");
  this.ra = a.get("modelStore");
  this.sg = b.path;
  this.Lf = this.sg.split("/")[3] || "drafts";
};
var L$ = function(a) {
  z.zO.call(this, a);
  this.Ea = a.get("butter-bar");
  this.S = a.get("dialog");
  this.Sa = a.get("listStore");
  this.N = a.get("request");
};
var M$ = function(a, b) {
  z.MQ.call(this, a, b);
  this.rf = null;
};
var N$ = function(a, b) {
  z.zO.call(this, a);
  this.Sa = a.get("listStore");
  this.rf = this.Mb = this.Oa = this.Ra = null;
  this.qx = b.categorySlug;
};
var O$ = function(a, b) {
  z.zO.call(this, a);
  this.Sa = a.get("listStore");
  this.Oa = this.Ra = null;
  this.Os = b.tagSlug;
  this.wx = z.Ua(this.Os.replace(/[\-]/g, " "));
  this.vb = a.get("routeManager").Wl(b.path);
};
var P$ = function(a, b) {
  z.MQ.call(this, a, b);
  this.pa = a.get("app");
  this.Sh = a.get("request");
};
var Q$ = function(a) {
  a = a.split("-");
  return a[a.length - 1];
};
var R$ = function(a, b) {
  z.zO.call(this, a);
  this.N = a.get("request");
  this.sg = b.path;
  this.xp = b.monthYearSlug;
  this.pw = this.xp.split("-")[0];
  this.SD = Q$(this.xp);
  this.Sa = a.get("listStore");
  this.Iw = "bestof:" + this.SD + ":" + this.pw;
  this.Wj = null;
};
var S$ = function(a) {
  return a.pw.charAt(0).toUpperCase() + a.pw.slice(1) + " " + a.SD;
};
var T$ = function(a, b) {
  z.MQ.call(this, a, b);
  this.Wj = null;
};
var U$ = function(a) {
  z.mJ.call(this);
  this.cd(a);
  this.Ad = null;
  $ca(this);
};
var $ca = function(a) {
  a.Ad = new z.fJ(a.query(".js-userTitle"), "Optional title");
  a.Ad.Ja(new z.pF(30, !1));
  a.Ad.J("change", function() {
    this.Q("change", {userId:this.W().getAttribute("data-user-id"), title:this.Ad.Na()});
  }, a);
  a.track(a.Ad);
};
var V$ = function(a, b) {
  z.mJ.call(this);
  this.qg = this.gp = null;
  this.cd(b);
};
var ada = function(a) {
  return {editorsNote:a.qg.editorsNote, excludedEditorIds:W$(a.qg.editors), excludedWriterIds:W$(a.qg.writers), userTitles:bda(a)};
};
var cda = function(a) {
  a.gp = new z.fJ(a.query(".js-editorsNote"), "Editor's note");
  a.gp.Ja(new z.pF(1200, !1));
  a.gp.J("change", function() {
    this.qg.editorsNote = this.gp.Na();
  }, a);
  a.track(a.gp);
  a.gp.focus();
  var b = a.W().querySelectorAll(".js-infoCardUser");
  (0,z.tb)(b, function(a) {
    a = new U$(a);
    a.J("add", this.iQ, this);
    a.J("remove", this.$V, this);
    a.J("change", this.VX, this);
    this.track(a);
  }, a);
};
var W$ = function(a) {
  var b = [];
  (0,z.tb)(a, function(a) {
    a.excluded && b.push(a.userId);
  });
  return b;
};
var X$ = function(a, b, c) {
  for (var d = 0;d < b.length;d++) {
    if (b[d].userId == a) {
      b[d].title = c;
      break;
    }
  }
};
var bda = function(a) {
  var b = [];
  (0,z.tb)(a.qg.writers, function(a) {
    var d = a.userId;
    a.title && b.push({userId:d, title:a.title});
  });
  (0,z.tb)(a.qg.editors, function(a) {
    var d = a.userId;
    a.title && b.push({userId:d, title:a.title});
  });
  return b;
};
var Y$ = function(a, b) {
  z.zO.call(this, a);
  this.gw = null;
  this.S = a.get("dialog");
  this.mc = b.collectionSlug;
  this.Va = a.get("modelRequest");
  this.ra = a.get("modelStore");
};
z.p(w9, z.Kl);
z.p(x9, z.Ol);
z.p(y9, z.Ml);
z.p(z9, z.xl);
z.rY.prototype.qG = z.Z(165, function(a) {
  a.user = a.value || a.user;
  return this.Xd(x9, a);
});
z.rY.prototype.oG = z.Z(164, function(a) {
  a.user = a.value || a.user;
  a = this.Xd(y9, a);
  a.posts = a.posts || [];
  a.collections = a.collections || [];
  a.latestPostsForCollections = a.latestPostsForCollections || [];
  a.latestPosts = a.latestPosts || [];
  a.recommendedPosts = a.recommendedPosts || [];
  a.postsRecommendedByUser = a.postsRecommendedByUser || [];
  return a;
});
z.rY.prototype.lG = z.Z(161, function(a) {
  a.collection = a.value || a.collection;
  return this.Xd(z9, a);
});
z.gY.prototype.GB = z.Z(159, function(a, b) {
  z.iE(this.ra, b);
  var c;
  c = "";
  switch(a) {
    case "drafts":
    ;
    case "public":
    ;
    case "unlisted":
    ;
    case "private":
      c = z.Cv.U({filterBy:a});
      break;
    default:
      z.Px("Asked to create a postlist of an unknown type: " + a);
  }
  c = this.Lh(c, "POST");
  c.Bd(b.posts);
  b.postList = c;
  return b;
});
z.gY.prototype.Nt = z.Z(158, function(a) {
  return z.q(this.Va.Nt(a), this.GB.bind(this, a));
});
z.rY.prototype.Nt = z.Z(157, function(a) {
  a = z.w(this.qa, z.Cv, {filterBy:a});
  return z.q(this.N.get(a, {oa:!0}), this.qG, this);
});
z.gY.prototype.EB = z.Z(156, function(a, b, c) {
  z.iE(this.ra, c);
  b = b.path.split("/")[2] || "overview";
  "overview" == b && z.x.sa().streamy_profile ? (a = B9(this, a, "latest"), a.Bd(c.latestPosts), a.Bi("source", "user-profile"), c.postList = a) : "overview" != b && "publications" != b && (a = B9(this, a, b), a.Bd(c.posts), a.Bi("source", "user-profile"), c.postList = a);
  return c;
});
z.gY.prototype.Lt = z.Z(155, function(a, b) {
  return z.q(this.Va.Lt(a, b), this.EB.bind(this, a, b));
});
z.rY.prototype.Lt = z.Z(154, function(a, b) {
  var c = z.w(this.qa, b, {username:a});
  return z.q(this.N.get(c, {oa:!0}), this.oG, this);
});
z.gY.prototype.Jq = z.Z(151, function(a, b, c) {
  b = A9(b);
  return this.BB(a, b, this.Va.Jq(c));
});
z.rY.prototype.Jq = z.Z(150, function(a) {
  a.posts = a.posts || a.value;
  return this.Xd(w9, a);
});
z.gY.prototype.BB = z.Z(149, function(a, b, c) {
  z.iE(this.ra, c);
  a = c.paging && c.paging.path || z.M0.U({tagSlug:a}, {sortBy:b});
  a = this.Lh(a, "GET");
  a.Bd(c.posts);
  z.cY(a, c.paging);
  c.postList = a;
  return c;
});
z.gY.prototype.It = z.Z(148, function(a, b) {
  var c = A9(b);
  return z.q(this.Va.It(a, c), this.BB.bind(this, a, c));
});
z.rY.prototype.It = z.Z(147, function(a, b) {
  var c = z.w(this.qa, z.M0, {tagSlug:a}, {sortBy:b});
  return z.q(this.N.get(c, {oa:!0}), this.Jq, this);
});
z.gY.prototype.sB = z.Z(146, function(a, b) {
  z.iE(this.ra, b);
  var c = b.paging && b.paging.path || z.wV.U({categorySlug:a}), c = this.Lh(c, "GET");
  c.Bd(b.posts);
  z.cY(c, b.paging);
  b.postList = c;
  return b;
});
z.gY.prototype.zt = z.Z(145, function(a) {
  return z.q(this.Va.zt(a), this.sB.bind(this, a));
});
z.rY.prototype.zt = z.Z(144, function(a) {
  a = z.w(this.qa, z.wV, {categorySlug:a});
  return z.q(this.N.get(a, {oa:!0}), this.pm, this);
});
z.gY.prototype.rB = z.Z(143, function(a, b) {
  z.iE(this.ra, b);
  var c = z.y0.U({monthYearSlug:a}), c = this.Lh(c, "POST");
  c.Bd(b.posts);
  b.postList = c;
  return b;
});
z.gY.prototype.xt = z.Z(142, function(a) {
  return z.q(this.Va.xt(a), this.rB.bind(this, a));
});
z.rY.prototype.xt = z.Z(141, function(a) {
  a = z.w(this.qa, z.hV, {monthYearSlug:a});
  return z.q(this.N.get(a, {oa:!0}), this.pm, this);
});
z.$O.prototype.wo = z.Z(136, function(a, b) {
  var c = this.tt(a, b);
  return c ? this.remove(c) : !1;
});
z.OS.prototype.wo = z.Z(135, function(a, b) {
  var c = this.tt(a, b);
  return c ? this.remove(c) : !1;
});
z.RS.prototype.wo = z.Z(134, function() {
  throw Error("Not implemented");
});
z.zh.prototype.Xq = z.Z(103, function(a) {
  return z.E(this, "facebookDisplayName", a);
});
z.Si.prototype.Xq = z.Z(102, function(a) {
  return z.E(this, "facebookDisplayName", a);
});
z.zh.prototype.uj = z.Z(101, function(a) {
  return z.E(this, "twitterScreenName", a);
});
z.Si.prototype.uj = z.Z(100, function(a) {
  return z.E(this, "twitterScreenName", a);
});
z.bj.prototype.uj = z.Z(99, function(a) {
  return z.E(this, "twitterScreenName", a);
});
z.uk.prototype.uj = z.Z(98, function(a) {
  return z.E(this, "twitterScreenName", a);
});
z.ih.prototype.ge = z.Z(97, function(a) {
  return z.E(this, "imageId", a);
});
z.zh.prototype.ge = z.Z(96, function(a) {
  return z.E(this, "imageId", a);
});
z.Si.prototype.ge = z.Z(95, function(a) {
  return z.E(this, "imageId", a);
});
z.Ti.prototype.ge = z.Z(94, function(a) {
  return z.E(this, "imageId", a);
});
z.Wi.prototype.ge = z.Z(93, function(a) {
  return z.E(this, "imageId", a);
});
z.Lj.prototype.ge = z.Z(92, function(a) {
  return z.E(this, "imageId", a);
});
z.uk.prototype.ge = z.Z(91, function(a) {
  return z.E(this, "imageId", a);
});
var J9 = [];
z.p(M9, z.MQ);
M9.prototype.Eb = function() {
  z.RC(this.va).H("request-export", this.lW, this);
};
M9.prototype.lW = function(a) {
  a.target.disabled = !0;
  a = z.yv.U();
  z.t(z.q(this.N.post(a, null, {We:!0}), this.bV, this), z.xJ(this.S, (0,z.M)("Sorry, we’re having trouble exporting right now. Please try later.")));
};
M9.prototype.bV = function() {
  var a = this.query(".js-exportSuccess");
  z.v(a, "u-hide");
};
z.p(P9, z.MQ);
P9.prototype.Eb = function() {
  var a = "Settings — " + z.Pi();
  this.Uc(new z.jJ(a, "Email Settings", "website"));
  z.RC(this.va).H("toggle-setting", this.FD, this);
};
P9.prototype.yl = function(a, b) {
  for (var c = 0;c < a.length;c++) {
    a[c].disabled = a[c].value == b;
  }
};
P9.prototype.FD = function(a) {
  for (var b = a.value, c = this.Ud('button[data-action-value\x3d"' + b + '"]'), d, e = 0;e < c.length;e++) {
    if (c[e].disabled) {
      d = c[e].value;
      break;
    }
  }
  a = Number(a.target.value);
  this.yl(c, a);
  b = z.E0.U({userId:this.Vs, hash:this.CS, setting:b});
  z.t(z.BO(this, "request").put(b, {value:a}, {oa:!0}), function(a) {
    this.yl(c, d);
    z.ex(a);
    this.S.error(L9());
  }, this);
};
z.p(R9, z.MQ);
z.f = R9.prototype;
z.f.Eb = function() {
  var a = "Settings — " + z.Pi();
  this.Uc(new z.jJ(a, "Settings", "website"));
  this.Mj = this.query(".js-emailSettingsInput");
  this.gv = this.query(".button--editEmail");
  this.ZH = this.query(".button--saveEmail");
  this.WH = this.query(".button--cancelEmail");
  this.Oi = this.query(".list-itemInput--username");
  this.YH = this.query(".button--edit-username");
  this.hv = this.query(".button--save-username");
  this.Zv = !1;
  this.XH = this.query(".button--cancel-username");
  this.Dl = this.query(".js-usernameSettingsItem");
  this.Mp = this.query(".list-item--username");
  a = new z.$Q(this.Ka(), this.Oi);
  a.J("availability-update", this.GA, this);
  a.J("availability-request", this.aB, this);
  this.track(a);
  z.RC(this.va).H("edit-username", this.dQ, this).H("save-username", this.fQ, this).H("cancel-username", this.aQ, this).H("remove-role", this.YC, this);
  z.RC(this.va).H("toggle-setting", this.FD, this).H("deactivate-account", this.bQ, this).H("request-delete-account", this.kW, this).H("edit-email", this.cQ, this).H("save-email", this.eQ, this).H("cancel-email", this.$P, this).H("connect-facebook", this.HQ, this).H("connect-twitter", this.IQ, this).H("disconnect-facebook", this.RQ, this).H("disconnect-twitter", this.SQ, this).H("help-disconnect", this.ES, this);
};
z.f.O = function() {
  R9.F.O.call(this);
  Rca(this);
  this.Fx && (Sca(this, {oauth_token:this.Fx.token, oauth_verifier:this.Fx.Q0}), this.Fx = null);
};
z.f.yl = function(a, b) {
  for (var c = 0;c < a.length;c++) {
    a[c].disabled = a[c].value == b;
  }
};
z.f.FD = function(a) {
  for (var b = a.value, c = this.Ud('button[data-action-value\x3d"' + b + '"]'), d, e = 0;e < c.length;e++) {
    if (c[e].disabled) {
      d = c[e].value;
      break;
    }
  }
  var g = Number(a.target.value);
  this.yl(c, g);
  a = z.v1.U({setting:b});
  z.t(z.q(this.N.put(a, {value:g}, {oa:!0}), function() {
    z.E(this.Rg, z.Ta(b), g);
  }, this), function(a) {
    this.yl(c, d);
    z.ex(a);
    this.S.error(L9());
  }, this);
};
z.f.bQ = function() {
  var a = this.S.confirm((0,z.M)("Are you sure you want to deactivate your account?"), "", (0,z.M)("Deactivate"));
  a && a.J(z.gP, function() {
    z.t(z.q(this.N.post(z.l1.U(), {}, {oa:!0}), this.IT, this), z.xJ(this.S, (0,z.M)("Sorry, we had a problem while trying to deactivate your user account. Please try again later.")));
  }, this);
};
z.f.IT = function() {
  window.location = z.m1.U();
};
z.f.kW = function() {
  var a = this.S.open({title:(0,z.M)("Request account deletion"), bodyHtml:z.Zv(Qca), xg:(0,z.M)("Submit"), type:"form"});
  a && a.J("submit", this.uX.bind(this));
};
z.f.uX = function() {
  var a = this.S.Fd(), b = a.query(".js-requestDeleteAccountReason"), b = {recipient:"yourfriends@medium.com", reason:b && b.value};
  z.t(z.q(this.N.post(z.L0.U(), b, {oa:!0}), this.aV.bind(this)), this.LT, this);
  a.close();
};
z.f.aV = function() {
  z.BO(this, "butter-bar").R((0,z.M)("Your request for account deletion was successfully submitted."), z.tT);
  z.fx(z.n2, {});
};
z.f.LT = function(a) {
  z.BO(this, "butter-bar").R((0,z.M)("Sorry, we couldn’t submit your account deletion request. Please try again later."), z.NP);
  z.Px(a);
};
z.f.cQ = function() {
  this.RA = this.Mj.value;
  z.v(this.ZH, "u-hide");
  z.v(this.WH, "u-hide");
  z.u(this.gv, "u-hide");
  this.Mj.disabled = !1;
  this.Mj.focus();
  Q9(this.Mj, this.Mj.value.length);
};
z.f.$P = function() {
  this.Mj.value = this.RA;
  S9(this);
};
z.f.eQ = function() {
  var a = this.Mj.value;
  a === this.RA ? S9(this) : z.XQ(a) ? (S9(this), a = {email:a}, z.t(z.q(this.N.put(z.x1.U(), a, {oa:!0}), function() {
    this.S.open({title:(0,z.M)("Thanks"), bodyHtml:z.dN(), type:z.yJ});
    var a = this.query(".js-emailSettingsItem .list-itemError");
    a && z.u(a, "u-hide");
    this.gv.innerHTML = "Edit";
    z.v(this.gv, "button--primary");
  }, this), z.xJ(this.S, (0,z.M)("An error occurred, and we were unable to update your email.")))) : this.S.error(z.bN());
};
z.f.dQ = function() {
  this.TA = this.Oi.value;
  this.aB();
  z.v(this.hv, "u-hide");
  z.v(this.XH, "u-hide");
  z.u(this.YH, "u-hide");
  z.ff(this.Dl, String(K9()));
  this.Oi.disabled = !1;
  this.Oi.focus();
  Q9(this.Oi, this.Oi.value.length);
};
z.f.aQ = function() {
  this.Oi.value = this.TA;
  z.u(this.hv, "u-hide");
  z.u(this.XH, "u-hide");
  z.v(this.YH, "u-hide");
  z.v(this.Mp, "list-item--error");
  z.u(this.Dl, "u-hide");
  this.Oi.disabled = !0;
  this.Oi.blur();
};
z.f.aB = function() {
  this.Zv || (this.Zv = this.hv.disabled = !0);
};
z.f.GA = function(a) {
  this.aB();
  z.v(this.Dl, "u-hide");
  a.value == this.TA ? (z.v(this.Mp, "list-item--error"), z.ff(this.Dl, String(K9()))) : a.ao ? a.vq ? (z.v(this.Mp, "list-item--error"), z.ff(this.Dl, String(z.fN())), this.Zv && (this.Zv = this.hv.disabled = !1)) : (z.u(this.Mp, "list-item--error"), z.ff(this.Dl, String(z.gN()))) : (z.u(this.Mp, "list-item--error"), z.ff(this.Dl, String(z.hN())));
};
z.f.fQ = function() {
  var a = this.Oi.value;
  if (z.xa(a) || !a.match(z.v0)) {
    z.u(this.Mp, "list-item--error"), z.ff(this.Dl, String(K9()));
  } else {
    var b = {username:a};
    this.S.confirm((0,z.M)("When you change your profile address, all of the embeds and links you have to it will no longer work. You must update this URL on any external sites."), "", (0,z.M)("I understand, change my profile address")).J(z.gP, function() {
      z.t(z.q(this.N.put(z.w1.U(), b, {oa:!0}), function() {
        z.KN.reload();
      }, this), z.Px);
    }, this);
  }
};
z.f.YC = function(a) {
  var b = a.target.getAttribute("data-action-value"), c = z.Mi().userId, d = this.S.confirm("Are you sure you want to remove yourself from this collection?", "Remove yourself from this collection");
  d && d.J(z.gP, function() {
    z.t(z.q(z.q(this.N.Cd(z.D1.U({collectionSlug:b, userId:c})), function() {
      C9(this.Sa, b);
    }, this), function() {
      var b = z.qf(a.target, "collection-item");
      z.No(b, "display", "none");
      this.VH.R("You removed yourself from this collection.", z.tT);
    }, this), function() {
      this.VH.R("Something went wrong while removing you from that collection. Please try again later.", z.NP);
    }, this);
  }, this);
};
z.f.HQ = function() {
  this.yI && window.FB.login(this.LQ.bind(this), {scope:"email"});
};
z.f.IQ = function() {
  var a = {operation:"connect"}, b = z.pS(a);
  a.stateId = b;
  z.qS(a);
};
z.f.LQ = function(a) {
  if (a.authResponse) {
    var b = window.document.querySelector(".button--facebook"), c = window.document.querySelector(".button-label--facebook");
    b.setAttribute("disabled", !0);
    c.innerText = (0,z.M)("Connecting…");
    a = a.authResponse;
    a = {accessToken:a.accessToken, facebookAccountId:a.userID};
    z.t(z.q(this.N.post(z.R0.U(), a, {oa:!0}), function(a) {
      this.Rg.Xq(a.name);
      var b = window.document.querySelector(".list-itemActions--facebook");
      z.$v(b, N9, {ly:a, twitterScreenName:this.Rg.twitterScreenName});
      T9(this);
    }, this), function(a) {
      b.removeAttribute("disabled");
      c.innerText = (0,z.M)("Connect to Facebook");
      switch(a.status) {
        case 409:
          a = (0,z.M)("It looks like this Facebook account is already connected to another Medium account.");
          break;
        default:
          a = (0,z.M)("Sorry, we had a problem while trying connect your Facebook account. Please try again later.");
      }
      this.S.error(a);
      T9(this);
    }, this);
  }
};
z.f.RQ = function() {
  var a = this.Rg.facebookDisplayName;
  this.Rg.Xq("");
  T9(this);
  z.t(z.q(this.N.Cd(z.R0.U(), {eg:0}), function() {
    var a = window.document.querySelector(".list-itemActions--facebook");
    z.$v(a, N9);
    window.document.querySelector(".button--facebook").removeAttribute("disabled");
  }, this), function() {
    this.S.error((0,z.M)("Sorry, we had a problem while disconnecting your Facebook account. Please try again later."));
    this.Rg.Xq(a);
    T9(this);
  }, this);
};
z.f.SQ = function() {
  var a = this.Rg.twitterScreenName;
  this.Rg.uj("");
  T9(this);
  z.t(z.q(this.N.Cd(z.S0.U(), {eg:0}), function() {
    var a = window.document.querySelector(".list-itemActions--twitter");
    z.$v(a, O9);
    window.document.querySelector(".button--twitter").removeAttribute("disabled");
  }, this), function() {
    this.S.error((0,z.M)("Sorry, we had a problem while disconnecting your Twitter account. Please try again later."));
    this.Rg.uj(a);
    T9(this);
  }, this);
};
z.f.ES = function(a) {
  return this.S.open({title:"Disconnecting Accounts", bodyHtml:Oca({Eu:a.value}), type:z.yJ});
};
z.f = U9.prototype;
z.f.Na = function() {
  return this.Ba() ? z.bq.clone(this.kj) : null;
};
z.f.Ba = function() {
  return this.kj.Ba();
};
z.f.fk = function() {
  return this.kj.fk();
};
z.f.Kt = function(a) {
  return String(z.Zv(z.Yt, V9(this, a)));
};
z.f.lk = function(a) {
  return this.Kt(this.kj, a);
};
z.f.bd = function(a) {
  this.kj.bd(a);
};
z.f.Ao = function(a) {
  this.kj.Ao(a);
};
z.f.rj = function(a) {
  this.kj.rj(a);
};
z.f = X9.prototype;
z.f.ge = function(a) {
  a = a || "";
  this.Ia.bd(a);
  a ? (Y9(this), this.element.setAttribute("data-image-id", a), this.rv && this.rv.removeAttribute("data-scroll-disabled")) : (this.element.removeAttribute("data-image-id"), this.rv && this.rv.setAttribute("data-scroll-disabled", !0));
  var b = this.Ia.lk();
  return z.q(this.yd.reset(), function() {
    a$(this, b);
  }, this);
};
z.f.Wz = function(a) {
  this.element.style.display = a ? "" : "none";
};
z.f.fF = function() {
  var a = "." + this.Ia.fk() + "-edit .imagePicker-target";
  return this.element.querySelector(a);
};
z.f.yO = function(a, b) {
  a.src = b;
  a.style.display = "";
};
z.f.DM = function(a) {
  a.style.display = "none";
};
z.p(b$, z.Wx);
z.f = b$.prototype;
z.f.O = function() {
  b$.F.O.call(this);
  this.ya(this.ob, "dragstart", z.ow(this.QT));
  this.ya(this.ob, "dragenter", z.ow(this.OT));
  this.ya(this.ob, "dragleave", z.ow(this.PT));
  this.ya(this.ob, "dragexit", z.ow(z.ca));
  this.ya(this.ob, "dragover", z.ow(z.ca));
  this.ya(this.ob, "drop", z.ow(this.RT));
};
z.f.QT = function(a) {
  a.x5 = "copy";
};
z.f.OT = function(a) {
  z.u(a.currentTarget, "imagePicker-dragover");
};
z.f.PT = function(a) {
  var b = z.Ko(z.Fw(a.currentTarget));
  (a.x < b.left || a.clientX > b.right || a.y > b.bottom || a.clientY < b.top) && z.v(a.currentTarget, "imagePicker-dragover");
};
z.f.RT = function(a) {
  z.v(a.currentTarget, "imagePicker-dragover");
  a.dataTransfer && a.dataTransfer.files && a.dataTransfer.files[0] && this.Zj.start(a.dataTransfer.files[0]);
};
var Uca = "cover", Tca = "contain", Z9 = "full";
z.p(c$, z.Ux);
var d$ = "is-pendingImage";
c$.prototype.reset = function() {
  return this.Ia.Ba() ? this.set("is-withImage") : this.set("is-withoutImage", !0);
};
c$.prototype.set = function(a, b) {
  z.Tc(this.FA, function() {
    if (this.yd != a) {
      var b = z.ad();
      this.Q("change", a, this.yd, b);
      return b;
    }
  }, this);
  b ? (z.qd(this.ob, this.yd, a), this.yd = a) : z.q(this.FA, function() {
    z.qd(this.ob, this.yd, a);
    this.yd = a;
  }, this);
  return this.FA.Jb();
};
c$.prototype.get = function() {
  return this.yd;
};
c$.prototype.ri = function() {
  return this.yd === d$ || "is-uploadingImage" === this.yd;
};
e$.prototype.reset = function() {
  this.ob && (this.ob.style.backgroundImage = "");
};
e$.prototype.show = function(a) {
  this.ob && (this.ob.style.backgroundImage = 'url("' + a + '")', this.ob.style.display = "block");
};
z.p(f$, z.Ux);
z.f = f$.prototype;
z.f.Ca = null;
z.f.qm = function() {
  this.abort();
  this.Ca = this.mh.Kq(!0);
  z.t(z.q(this.Ca, this.SJ, this), this.Of, this);
};
z.f.start = function(a) {
  this.abort();
  a = this.mh.upload(a);
  this.Ca = z.ad(a);
  z.t(z.q(this.Ca, this.SJ, this), this.Of, this);
};
z.f.abort = function() {
  for (var a = 0;a < this.Sp.length;a++) {
    z.fn(this.Sp[a]);
  }
  this.Sp.length = 0;
  this.Ca && this.Ca.cancel();
  this.Ca = null;
};
z.f.aa = function() {
  this.abort();
  f$.F.aa.call(this);
};
z.f.next = function() {
  this.$r();
};
z.f.$r = function() {
  if (!this.Sp.length) {
    return null;
  }
  var a = this.Sp.shift();
  a.Bn = this.Bn;
  a.J("progress", this.vw, this);
  var b = a.start();
  this.Q("start");
  z.yI(a) && z.q(z.BI(a), function(a) {
    this.Q("preview", a);
  }, this);
  z.Uc(z.t(z.q(b, function(a) {
    this.Q("success", a);
  }, this), this.Of, this), function() {
    a.zb("progress", this.vw, this);
  }, this);
  return b;
};
z.f.SJ = function(a) {
  this.Sp = a;
  return this.$r();
};
z.f.vw = function(a) {
  this.Q("progress", a);
};
z.f.Of = function(a) {
  a && a instanceof z.dd ? this.Q("abort", (0,z.M)("This operation was canceled by the user.")) : this.Q("error", a || Error("Unknown upload error"));
};
z.f = g$.prototype;
z.f.qm = function() {
  this.Og.qm();
};
z.f.start = function(a) {
  this.Og.start(a);
};
z.f.abort = function() {
  this.Og.abort();
};
z.f.oV = function() {
  this.yd.set("is-uploadingImage");
  this.Dp && (this.Dp.style.width = "0");
  this.Cp.reset();
  this.Ab.Q(C$);
};
z.f.nV = function(a) {
  this.Dp && (this.Dp.style.width = Math.floor(100 * a) + "%");
};
z.f.kV = function(a) {
  this.Ia.rj("");
  W9(this.Ia, a.af(), a.gj());
  var b = a.Ba();
  this.Dp && (this.Dp.style.width = "100%");
  z.q(this.yr.ge(b), function() {
    this.Ab.Q(F$, b);
  }, this);
};
z.f.lV = function(a) {
  var b = a.httpStatus;
  this.S.error(413 == b ? z.EI() : 415 == b ? z.FI() : (0,z.M)("An error occured while uploading an image. Please try again, if the problem persists, try converting to a different image format (for example JPEG)."));
  this.Cp.reset();
  $9(this.yr);
  this.Ab.Q(D$, a);
};
z.f.jV = function(a) {
  this.Cp.reset();
  "is-withImage" != this.yd.get() && $9(this.yr);
  this.Ab.Q(E$, a);
};
z.f.mV = function(a) {
  this.Cp.show(a);
};
z.p(h$, z.Wx);
h$.prototype.O = function() {
  h$.F.O.call(this);
  z.RC(this.ob).H("wash", this.AS, this);
};
h$.prototype.fa = function() {
  h$.F.fa.call(this);
  z.RC(this.ob).clear("wash");
};
h$.prototype.AS = function(a) {
  this.Ia.rj(a.value);
  Vca(this.yr);
};
var C$ = "start", F$ = "complete", D$ = "error", E$ = "abort", Wca = "change";
z.p(i$, z.mJ);
z.f = i$.prototype;
z.f.focus = function() {
};
z.f.Wz = function(a) {
  this.Nl.Wz(a);
};
z.f.Na = function() {
  return this.Ia.Na();
};
z.f.ri = function() {
  return this.state.ri();
};
z.f.O = function() {
  i$.F.O.call(this);
  z.RC(this.element).H("pick-image", this.Zj.qm, this.Zj).H("cancel-upload", this.abort, this).H("remove-image", function() {
    this.Nl.ge("");
  }, this);
  this.Ia.Ba() && Y9(this.Nl);
};
z.f.fa = function() {
  z.TG(this.element);
  this.abort();
  i$.F.fa.call(this);
};
z.f.reset = function() {
  return z.q(this.abort(), function() {
    $9(this.Nl);
    this.Zj.Cp.reset();
  }, this);
};
z.f.abort = function() {
  this.Zj && this.Zj.abort();
  return this.state.reset();
};
z.f.qE = function(a, b) {
  return new U9(a, b);
};
z.f.zL = function(a) {
  return new g$(a, this, this.element, this.Ia, this.state, this.Nl);
};
z.p(j$, i$);
j$.prototype.yL = function(a, b, c, d, e) {
  return new m$(a, b, c, d, e);
};
j$.prototype.qE = function(a, b) {
  a = z.$y(this.element.querySelector(".imagePicker-target")) || new z.Ui;
  return new l$(a, b);
};
j$.prototype.zL = function(a) {
  return new k$(a, this, this.ZX, this.Ia, this.state, this.Nl);
};
z.p(k$, g$);
k$.prototype.lX = function() {
  z.u(this.ob, "is-uploadingImage");
};
k$.prototype.ZC = function() {
  z.v(this.ob, "is-uploadingImage");
};
z.p(l$, U9);
l$.prototype.Kt = function(a) {
  a = V9(this, a);
  a.XM = !0;
  return String(z.Zv(G9, a));
};
z.p(m$, X9);
m$.prototype.fF = function() {
  return this.element.querySelector(".imagePicker-target");
};
z.p(n$, i$);
n$.prototype.yL = function(a, b, c, d, e) {
  return new p$(a, b, c, d, e);
};
n$.prototype.qE = function(a, b) {
  return new o$(a, b, this.BD);
};
z.p(o$, U9);
o$.prototype.Kt = function(a, b) {
  return String(z.Zv(this.BD ? I9 : H9, {image:V9(this, a), bm:b}));
};
z.p(p$, X9);
p$.prototype.fF = function() {
  return this.element.querySelector(".imagePicker-target") || this.element;
};
p$.prototype.yO = function(a, b) {
  a.style.backgroundImage = "url(" + b + ")";
};
p$.prototype.DM = function(a) {
  a.style.backgroundImage = "";
};
z.p(q$, z.Wx);
var r$ = "followers";
z.f = q$.prototype;
z.f.O = function() {
  q$.F.O.call(this);
  z.RC(this.za.W()).H("show-follow-list", this.XW, this);
};
z.f.fa = function() {
  q$.F.fa.call(this);
  this.Mh && (this.Mh.cancel(), this.Mh = null);
};
z.f.Ua = function() {
  q$.F.Ua.call(this);
  this.za = this.Zb = null;
};
z.f.XW = function(a) {
  this.Mh && this.Mh.cancel();
  this.Kd = "following" == a.value ? "following" : r$;
  this.Zb.socialStats && (this.Fv.following = this.Zb.socialStats.usersFollowedCount, this.Fv[r$] = this.Zb.socialStats.usersFollowedByCount);
  this.Gj[this.Kd] ? t$(this) : this.Mh = z.Uc(z.q(s$(this), function(a) {
    this.Gj[this.Kd] = a.value;
    t$(this);
  }, this), function() {
    this.Mh = null;
  }, this);
};
z.f.cC = function() {
  this.Mh && this.Mh.cancel();
  this.Mh = z.Uc(z.q(s$(this), function(a) {
    var b = this.S.Fd(), c = b.query(".list--follows");
    if (c) {
      a = a.value.filter(function(a) {
        return !this.Gr[this.Kd][a.userId];
      }, this);
      z.gb(this.Gj[this.Kd], a);
      var d = z.aw(z.YP, {users:a});
      c.appendChild(d);
      !a.length && this.Gj[this.Kd].length >= this.Fv[this.Kd] - 1 && (b = b.query(".js-buttonMoreFollows"), z.u(b, "u-hide"));
      for (b = 0;b < a.length;b++) {
        this.Gr[this.Kd][a[b].userId] = !0;
      }
    } else {
      z.Px(Error("Could not find follow list element"));
    }
  }, this), function() {
    this.Mh = null;
  }, this);
};
z.p(z$, z.zO);
z.f = z$.prototype;
z.f.Ra = null;
z.f.Oa = null;
z.f.dh = null;
z.f.Zb = null;
z.f.Mi = null;
z.f.tp = null;
z.f.rl = null;
z.f.UC = null;
z.f.on = null;
z.f.uc = function() {
  return z.q(z.q(this.Sa.Lt(this.Wh, this.QC), this.De, this), this.dJ ? this.$v ? this.eW : this.cW : this.Yc, this);
};
z.f.Eb = function() {
  var a = this.Zb, b = a.getName() + " — " + z.Pi(), c = "The profile of " + a.getName(), b = new z.jJ(b, c, "profile");
  b.username = a.He();
  b.name = a.getName();
  this.Uc(b);
  z.RC(this.va).H("remove-image", this.ZV, this).H("edit-profile", this.$Q, this).H("cancel-edit", this.xQ, this).H("save-profile", this.vW, this).H("embed-profile", this.cR, this).H("feature-post", this.lR, this).H("unfeature-post", this.RX, this).H("post-actions", this.yC, this);
  a = this.query(".hero-title");
  this.cp = z.pw(a);
  this.Oa && (a = z.GO((new z.EO(this.Ka())).zm(this.Oa), this.va).Di(z.by()), a.Vw = {s7:"has-recommended" != this.Lf, t7:"has-recommended" != this.Lf}, this.Ra = a, this.Qr && z.HO(this.Ra, "profile-feed"));
  this.track(new q$(this.Ka(), this.Zb));
  this.on = this.query(".button--remove");
  this.Zb.backgroundImageId || this.on && z.u(this.on, "u-hide");
  z.x.sa().casual_content_viewer && (this.track(new z.HP(this.Ka())), this.track(new z.KP(this.Ka())));
  this.track(new z.IO(this.Ka()));
};
z.f.Ke = function(a) {
  a.references = {};
  a.value = a.user;
  this.De(Cca(this.Sa, this.Wh, this.QC, a));
};
z.f.O = function() {
  z$.F.O.call(this);
  this.Ra && this.Ra.R();
  z.fx(z.U2, {profileId:this.Zb.userId});
  z.px(1, "profile");
  this.mR && z.Xx(this, this.cb, "scroll-end", this.jw, this);
};
z.f.Ua = function() {
  z.fn(this.Ra);
  this.Ra = null;
  z$.F.Ua.call(this);
};
z.f.fa = function() {
  this.Ra && this.Ra.fb();
  z.v(window.document.body, "editing");
  z$.F.fa.call(this);
};
z.f.Xp = function() {
  return G$(this) ? String(z.X5()) : !1;
};
z.f.De = function(a) {
  this.dh = a;
  this.Zb = this.dh.user;
  this.Mi = this.dh.featuredPost;
  this.tp = this.dh.latestPosts;
  this.rl = this.dh.recommendedPosts;
  this.UC = this.dh.postsRecommendedByUser;
  if (!this.dJ && this.CK || this.$v) {
    this.Oa = this.dh.postList;
  }
};
z.f.cW = function() {
  var a = {feedPath:z.C1.U({username:this.Wh}), collections:this.dh.collections, collectionCount:this.dh.collectionCount, postsRecommendedByUser:this.UC, latestPosts:this.tp, recommendedPosts:this.rl, featuredPost:this.Mi, user:this.Zb, filterBy:this.Lf};
  z.$v(this.va, u$, a);
};
z.f.Yc = function() {
  var a = {user:this.Zb, filterBy:this.Lf};
  this.CK ? (a.posts = this.Oa.fc(), this.Qr && (a.Td = z.sM(this.Oa.fc(), z.x))) : a.collections = this.dh.collections;
  z.$v(this.va, u$, a);
};
z.f.eW = function() {
  var a = {user:this.Zb, collections:this.dh.collections, latestPostsForCollections:this.dh.latestPostsForCollections, featuredPost:this.Mi, filterBy:this.Lf, latestPosts:this.tp, postsRecommendedByUser:this.UC, recommendedPosts:this.rl};
  if (this.Qr) {
    var b = z.x;
    a.aM = z.tM(this.Mi, b);
    a.jz = z.sM(this.tp, b);
    a.ZN = z.sM(this.rl, b);
  }
  z.$v(this.va, u$, a);
};
z.f.$Q = function() {
  B$(this);
  this.cp = this.gc.Na() || this.cp;
  this.nv = this.zj.Na();
  this.OA = H$(this);
  this.NA = I$(this);
  z.fx(z.W2, {profileId:this.Zb.userId});
};
z.f.xQ = function() {
  this.$g.reset();
  this.Pf.reset();
  A$(this);
  z.fx(z.X2, {profileId:this.Zb.userId});
};
z.f.oI = function() {
  this.query(".button--save").setAttribute("disabled", "disabled");
};
z.f.Pm = function() {
  this.query(".button--save").removeAttribute("disabled");
};
z.f.fX = function() {
  this.on && z.v(this.on, "u-hide");
};
z.f.cR = function() {
  z.fx(z.J3, {profileId:this.Zb.userId});
  this.S.open({title:(0,z.M)("Embed this profile"), bodyHtml:z.Zv(Gca, {user:this.Zb, recommendedPosts:this.rl.slice(0, 1), latestPosts:this.tp.slice(0, 3)}), type:z.yJ}).query("textarea").select();
};
z.f.vW = function() {
  if (!this.Pf.ri() && !this.$g.ri()) {
    var a = G$(this);
    if (!a) {
      return A$(this);
    }
    a.name && (this.cp = a.name);
    a.bio && (this.nv = a.bio);
    var b = {name:a.name, bio:a.bio};
    this.Lv && (this.OA = b.backgroundImageId = a.backgroundImageId);
    a.kL && (this.NA = b.imageId = a.kL);
    z.fx(z.Y2, {profileId:this.Zb.userId});
    a = z.Iv.U({username:this.Wh});
    z.t(z.BO(this, "request").put(a, b, {oa:!0}), function() {
      this.S.error((0,z.M)("An error occurred, and we were unable to update your profile."));
      B$(this);
    }, this);
    A$(this);
  }
};
z.f.ZV = function() {
  Xca(this.Pf);
  this.Pm();
  z.v(this.query(".imageBleed--header"), "is-usingCanvas");
  this.on && z.u(this.on, "u-hide");
};
z.f.Kr = function(a) {
  a = this.ra.xb(a);
  return a ? a : (this.Ea.R(z.MP(), z.NP), null);
};
z.f.yC = function(a) {
  var b = a.target;
  a = a.value;
  z.gd(b, "js-onboardingGotItButton") && (b = this.query(".blockGroup--latest").querySelector(".js-postActionsButton"), a = b.getAttribute("data-action-value"));
  if (a = this.Kr(a)) {
    var c = this.Mi && this.Mi.id == a.id;
    z.DZ(z.EZ(z.KU(z.LU(z.MU(this.Aa), b), Yca, {post:a, isFeatured:c}), "popover--menu"), "bottom").R();
  }
};
z.f.lR = function(a) {
  var b = this.Kr(a.value);
  b && (z.fx(z.Z2, {userId:this.Zb.userId, postId:b.id}), a = z.D0.U({username:this.Zb.username}), z.Tc(z.t(this.N.put(a, {postId:b.id}, {oa:!0, background:!0}), z.Px), function(a) {
    a instanceof Error || !1 === a ? this.Ea.R(Mca({title:b.title}), z.NP) : (this.Ea.R(Nca({title:b.title}), z.tT), J$(this, b));
  }, this));
};
z.f.RX = function() {
  if (this.Mi) {
    z.fx(z.$2, {userId:this.Zb.userId});
    var a = z.D0.U({username:this.Zb.username});
    z.Tc(z.t(this.N.Cd(a, {We:!0}), z.Px), function(a) {
      a instanceof Error || !1 === a ? this.Ea.R(Kca({title:this.Mi.title}), z.NP) : (this.Ea.R(Lca({title:this.Mi.title}), z.tT), J$(this, null));
    }, this);
  }
};
z.f.jw = function() {
  var a = new z.Vw("profile-screen");
  if (!(2 > this.tp.length || a.get("featured-onboarding"))) {
    var b = this.query(".blockGroup--latest .js-postActionsButton");
    if (b) {
      var c = z.hy(this.Be), d = this.Be.track(b).Nc(), e = this.Kr(b.getAttribute("data-action-value"));
      e && c.contains(d) && (z.EZ(z.DZ(z.LU(z.KU(z.MU(this.Aa), Zca, {post:e}), b), "bottom"), "popover--onboarding").R(), a.put("featured-onboarding", !0), this.cb.zb("scroll-end", this.jw, this));
    }
  }
};
z.p(K$, z.zO);
z.f = K$.prototype;
z.f.Ra = null;
z.f.Oa = null;
z.f.Nx = null;
z.f.Zb = null;
z.f.uc = function() {
  return z.q(z.q(this.Sa.Nt(this.Lf), this.De, this), this.Yc, this);
};
z.f.Eb = function() {
  var a = this.Zb, b = "Your stories — " + z.Pi(), b = new z.jJ(b, "Your stories", "profile");
  b.username = a.He();
  b.name = a.getName();
  this.Uc(b);
  this.Oa && (this.Ra = z.HO(z.GO((new z.EO(this.Ka())).zm(this.Oa), this.va).Di(z.by()), "your-stories"));
  z.x.sa().enable_your_stories_more_actions && this.track(new z.JP(this.Ka()));
};
z.f.Ke = function(a) {
  a.references = {};
  a.value = a.user;
  this.De(Bca(this.Sa, this.Lf, a));
};
z.f.O = function() {
  K$.F.O.call(this);
  this.Ra && this.Ra.R();
};
z.f.Ua = function() {
  z.fn(this.Ra);
  this.Ra = null;
  K$.F.Ua.call(this);
};
z.f.fa = function() {
  this.Ra && this.Ra.fb();
  K$.F.fa.call(this);
};
z.f.Xp = function() {
  return !1;
};
z.f.De = function(a) {
  this.Nx = a;
  this.Zb = this.Nx.user;
  this.Oa = this.Nx.postList;
};
z.f.Yc = function() {
  var a = {user:this.Zb, filterBy:this.Lf, userPostCounts:this.Nx.userPostCounts, posts:this.Oa.fc()};
  z.$v(this.va, y$, a);
};
z.p(L$, z.zO);
z.f = L$.prototype;
z.f.uc = function() {
  return z.q(this.N.get(z.oV.U(), {oa:!0, eg:0}), this.Yc, this);
};
z.f.Eb = function() {
  var a = "Your stories — " + z.Pi();
  this.Uc(new z.jJ(a, "Your stories", "profile"));
};
z.f.O = function() {
  L$.F.O.call(this);
  z.RC(this.va).H("remove-role", this.YC, this);
};
z.f.fa = function() {
  z.TG(this.va);
  L$.F.fa.call(this);
};
z.f.Yc = function(a) {
  z.$v(this.va, y$, {filterBy:"publications", collectionRelations:a.value, userPostCounts:a.userPostCounts, embedData:!0});
};
z.f.YC = function(a) {
  var b = a.value, c = z.Mi().userId, d = this.S.confirm((0,z.M)("Are you sure you want to remove yourself from this publication?"), (0,z.M)("Remove yourself from this publication"));
  d && d.J(z.gP, function() {
    z.t(z.q(this.N.Cd(z.D1.U({collectionSlug:b, userId:c})), function() {
      C9(this.Sa, b);
      var c = z.qf(a.target, "collection-item");
      z.u(c, "u-hide");
      this.Ea.R((0,z.M)("You removed yourself from this publication."), z.tT);
    }, this), function() {
      this.Ea.R((0,z.M)("Something went wrong while removing you from that publication. Please try again later."), z.NP);
    }, this);
  }, this);
};
z.p(M$, z.MQ);
z.f = M$.prototype;
z.f.tf = new z.LN(36E5);
z.f.Eb = function() {
  z.RC(this.va).H("view-top-stories", this.Ws, this);
  this.Mb = new z.zQ(this.Ka(), this.query(".js-sidebarWrapper"), null);
  this.track(this.Mb);
  this.track(new z.OP(this.Ka()));
};
z.f.O = function() {
  M$.F.O.call(this);
  this.rf = z.Uc(new z.Jd([z.JQ(this.Mb), z.EQ(this.Mb)]), function() {
    z.DQ(this.Mb);
  }, this);
};
z.f.fa = function() {
  this.rf && (this.rf.cancel(!0), this.rf = null);
  M$.F.fa.call(this);
};
z.f.Ws = function() {
  z.fx(z.O3, {});
  z.BO(this, "app").navigate(z.fV.U());
};
z.p(N$, z.zO);
z.f = N$.prototype;
z.f.tf = new z.LN(36E5);
z.f.uc = function() {
  return z.q(z.q(this.Sa.zt(this.qx), this.Js, this), this.Yc, this);
};
z.f.Ua = function() {
  z.fn(this.Ra);
  N$.F.Ua.call(this);
};
z.f.Ke = function(a) {
  this.Js(Dca(this.Sa, this.qx, a));
};
z.f.Eb = function() {
  z.RC(this.va).H("view-top-stories", this.Ws, this);
  this.Oa && (this.Ra = z.GO((new z.EO(this.Ka())).zm(this.Oa), this.va).Di(z.by()));
  z.x.sa().casual_content_viewer && z.HO(this.Ra, "home-feed");
  this.Mb = new z.zQ(this.Ka(), this.query(".js-sidebarWrapper"), null);
  this.track(this.Mb);
  this.track(new z.OP(this.Ka()));
};
z.f.O = function() {
  N$.F.O.call(this);
  z.fx(z.S3, {categorySlug:this.qx});
  this.Ra && this.Ra.R();
  this.rf = z.Uc(new z.Jd([z.JQ(this.Mb), z.EQ(this.Mb)]), function() {
    z.DQ(this.Mb);
  }, this);
  if (!this.xk.hm) {
    var a = this.query(".navTabs-item.is-active");
    a && a.firstChild.focus();
  }
};
z.f.fa = function() {
  this.Ra && (this.Ra.fb(), this.Ra = null);
  this.rf && (this.rf.cancel(), this.rf = null);
  N$.F.fa.call(this);
};
z.f.Js = function(a) {
  this.Oa = a.postList;
};
z.f.Yc = function() {
  var a = this.Oa.Ve(), b = {posts:a, yY:this.qx};
  z.x.sa().casual_content_viewer && (b.Td = z.sM(a, z.x));
  z.$v(this.va, Fca, b);
};
z.f.Ws = function() {
  z.fx(z.O3, {});
  z.BO(this, "app").navigate(z.fV.U());
};
z.p(O$, z.zO);
z.f = O$.prototype;
z.f.tf = new z.LN(36E5);
z.f.uc = function() {
  return z.q(z.q(this.Sa.It(this.Os, this.vb), this.De, this), this.Yc, this);
};
z.f.Ua = function() {
  z.fn(this.Ra);
  this.Ra = null;
  O$.F.Ua.call(this);
};
z.f.Ke = function(a) {
  this.De(this.Sa.Jq(this.Os, this.vb, a));
};
z.f.Eb = function() {
  var a = this.wx + " — " + z.Pi();
  this.Uc(new z.jJ(a, "Posts tagged in " + this.wx, "website"));
  this.Oa && (this.Ra = z.GO((new z.EO(this.Ka())).zm(this.Oa), this.va).Di(z.by()), z.x.sa().casual_content_viewer && z.HO(this.Ra, "profile-feed"));
  this.track(new z.OP(this.Ka()));
  z.x.sa().casual_content_viewer && (this.track(new z.HP(this.Ka())), this.track(new z.KP(this.Ka())));
  this.track(new z.IO(this.Ka()));
};
z.f.O = function() {
  O$.F.O.call(this);
  z.fx(z.T3, {tagSlug:this.Os});
  this.Ra && this.Ra.R();
};
z.f.fa = function() {
  this.Ra && this.Ra.fb();
  O$.F.fa.call(this);
};
z.f.De = function(a) {
  a.tag && a.tag.name && (this.wx = a.tag.name);
  this.Oa = a.postList;
  this.VV = a.relatedTags;
};
z.f.Yc = function() {
  var a = this.Oa.Ve(), b = z.x.sa().casual_content_viewer ? z.sM(this.Oa.fc(), z.x) : null;
  z.$v(this.va, Pca, {posts:a, Td:b, tagSlug:this.Os, tagName:this.wx, relatedTags:this.VV, sortBy:A9(this.vb)});
};
z.p(P$, z.MQ);
P$.prototype.AO = function() {
};
P$.prototype.Eb = function() {
  var a = "Verify your account — " + z.Pi();
  this.Uc(new z.jJ(a, "Please verify your account to continue", "website"));
};
var Z$ = "january february march april may june july august september october november december".split(" ");
z.p(R$, z.zO);
z.f = R$.prototype;
z.f.tf = z.E5;
z.f.Ra = null;
z.f.Oa = null;
z.f.uc = function() {
  return z.q(z.q(this.Sa.xt(this.xp), this.pg, this), this.Yc, this);
};
z.f.Eb = function() {
  var a = "Top 100 — " + S$(this) + " — " + z.Pi();
  this.Uc(new z.jJ(a, "The most read posts of " + S$(this) + ".", "website"));
  this.Ra = z.GO((new z.EO(this.Ka())).zm(this.Oa), this.va).Di(z.by());
  this.Mb = new z.zQ(this.Ka(), this.query(".js-sidebarWrapper"), null);
  this.track(this.Mb);
  this.track(new z.OP(this.Ka()));
};
z.f.Ke = function(a) {
  this.pg(Eca(this.Sa, this.xp, a));
};
z.f.O = function() {
  R$.F.O.call(this);
  this.Ra && this.Ra.R();
  this.Wj = z.Uc(z.EQ(this.Mb), function() {
    z.DQ(this.Mb);
  }, this);
};
z.f.fa = function() {
  this.Ra && this.Ra.fb();
  this.Wj && (this.Wj.cancel(), this.Wj = null);
  R$.F.fa.call(this);
};
z.f.pg = function(a) {
  this.Oa = a.postList;
};
z.f.Yc = function() {
  var a = this.Oa.Ve(), b = z.D(z.x, "bestOfFirstSlug").toString(), c = z.D(z.x, "bestOfLatestSlug").toString(), d = this.pw, e = this.va, d = d.charAt(0).toUpperCase() + d.slice(1), g = this.SD, h;
  h = this.xp;
  h == c ? h = null : (c = h.split("-")[0], c = (Z$.indexOf(c) + 1) % Z$.length, h = (0,window.parseInt)(Q$(h), 10), h = Z$[c] + "-" + (c ? h : h + 1).toString());
  c = this.xp;
  c == b ? b = null : (b = c.split("-")[0], b = Z$.indexOf(b) - 1, c = (0,window.parseInt)(Q$(c), 10), 0 > b && (b = Z$.length + b, c--), b = Z$[b] + "-" + c.toString());
  z.$v(e, Jca, {posts:a, month:d, year:g, nextSlug:h, prevSlug:b});
};
z.p(T$, z.MQ);
z.f = T$.prototype;
z.f.tf = new z.LN(36E5);
z.f.Eb = function() {
  var a = "Top stories — " + z.Pi();
  this.Uc(new z.jJ(a, "The most recommended posts today", "website"));
  this.Mb = new z.zQ(this.Ka(), this.query(".js-sidebarWrapper"), null);
  this.track(this.Mb);
  z.RC(this.va).H("view-top-100", this.iY, this);
  this.track(new z.OP(this.Ka()));
  this.track(new z.IO(this.Ka()));
};
z.f.Ua = function() {
  z.TG(this.va);
  T$.F.Ua.call(this);
};
z.f.O = function() {
  T$.F.O.call(this);
  this.Wj = z.Uc(z.EQ(this.Mb), function() {
    z.DQ(this.Mb);
  }, this);
};
z.f.fa = function() {
  this.Wj && (this.Wj.cancel(), this.Wj = null);
  T$.F.fa.call(this);
};
z.f.iY = function() {
  z.fx(z.P3, {});
  z.BO(this, "app").navigate(z.hV.U({monthYearSlug:z.D(z.x, "bestOfLatestSlug")}));
};
z.p(U$, z.mJ);
U$.prototype.O = function() {
  U$.F.O.call(this);
  z.RC(this.W()).H("toggle-hide-user", this.IX, this);
};
U$.prototype.fa = function() {
  z.TG(this.W());
  U$.F.fa.call(this);
};
U$.prototype.IX = function(a) {
  var b = z.gd(this.W(), "is-hidden"), c = b ? "add" : "remove", d = a.value, e = a.target.getAttribute("data-user-type");
  this.Q(c, {userId:d, Fm:e});
  z.od(this.W(), "is-hidden", !b);
  z.Te(z.aw(D9, {userId:d, Fm:e, bN:!b}), a.target);
};
z.p(V$, z.mJ);
z.f = V$.prototype;
z.f.O = function() {
  V$.F.O.call(this);
  cda(this);
};
z.f.setData = function(a) {
  this.qg = a.clone();
};
z.f.iQ = function(a) {
  if (!a || !a.userId || !a.Fm) {
    return null;
  }
  this.rn(a.userId, "writer" == a.Fm ? this.qg.writers : this.qg.editors, !1);
};
z.f.$V = function(a) {
  if (!a || !a.userId || !a.Fm) {
    return null;
  }
  this.rn(a.userId, "writer" == a.Fm ? this.qg.writers : this.qg.editors, !0);
};
z.f.rn = function(a, b, c) {
  for (var d = 0;d < b.length;d++) {
    if (b[d].userId == a) {
      b[d].excluded = c;
      break;
    }
  }
};
z.f.VX = function(a) {
  if (!a || !a.userId || !a.title) {
    return null;
  }
  X$(a.userId, this.qg.writers, a.title);
  X$(a.userId, this.qg.editors, a.title);
};
z.p(Y$, z.zO);
z.f = Y$.prototype;
z.f.uc = function() {
  var a;
  a = this.Va;
  var b = z.w(a.qa, z.Wv, {collectionSlug:this.mc});
  a = z.q(a.N.get(b, {oa:!0}), a.lG, a);
  return z.q(z.q(a, this.De, this), this.Yc, this);
};
z.f.Ke = function(a) {
  this.De(this.Va.lG(a));
};
z.f.Eb = function() {
  Y$.F.Eb.call(this);
  z.RC(this.va).H("masthead-save", this.gs, this);
  this.gw = new V$(0, this.va.querySelector(".js-masthead"));
  this.gw.setData(this.eI);
  this.track(this.gw);
};
z.f.fa = function() {
  z.TG(this.va);
  Y$.F.fa.call(this);
};
z.f.De = function(a) {
  z.iE(this.ra, a);
  this.eI = a.collection;
};
z.f.Yc = function() {
  z.$v(this.va, Hca, {collection:this.eI, si:!0});
};
z.f.gs = function() {
  var a = ada(this.gw), b = z.Uv.U({collectionSlug:this.mc});
  return z.t(z.q(z.BO(this, "request").post(b, a, {oa:!0}), function() {
    z.BO(this, "app").navigate(b);
  }, this), z.xJ(this.S, z.W5()));
};
var $$ = z.lR;
z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5(z.T5($$.Ka().scope("app"), "ExportScreen", M9), "SettingsScreen", R9), "EmailSettingsScreen", P9), "ProfileScreen", z$), "YourCollectionsScreen", L$), "YourStoriesScreen", K$), "BookmarksScreen", M$), "CategoryScreen", N$), "TagScreen", O$), "VerificationScreen", P$), "BestOfScreen", R$), "TopStoriesScreen", T$), "ImportScreen", z.PU), "MastheadEditScreen", Y$);
z.U5($$, "misc-screens");
})(_mdm);
