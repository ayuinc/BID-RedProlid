(function(z){
z.Z = function(a, b) {
  return z.aa[a] = b;
};
z.T5 = function(a, b, c) {
  return a.Ux(b, function() {
    return c;
  });
};
z.U5 = function(a, b) {
  var c = a.Db[b];
  if (!c) {
    throw Error('Called finishLoading on "' + b + '", which looks like it was not in the process of loading.');
  }
  z.q(a.cB[b] || z.ad(!0), function() {
    delete this.Db[b];
    delete this.cB[b];
    this.Tv[b] = !0;
    c.pb(!0);
  }, a);
};
z.V5 = function(a) {
  return (0,z.M)(z.P(z.iv(String(a.wordCount))) + " word" + (1 != a.wordCount ? "s" : ""));
};
z.W5 = function() {
  return (0,z.M)("An error occurred, and we were unable to update your publication.");
};
z.X5 = function() {
  return (0,z.M)("Are you sure you want to leave? Unsaved changes may be lost.");
};
z.b_.prototype.qm = z.Z(166, function() {
  return z.q(this.Kq(!0), function(a) {
    return a[0];
  });
});
z.U5(z.lR, "common-async");
})(_mdm);
