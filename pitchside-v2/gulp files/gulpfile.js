//WEBSITE TITLE
var webtitle = "Ignite - floe";

//GULP & PLUGINS
var gulp = require("gulp"),
  plumber = require("gulp-plumber"),
  concat = require("gulp-concat"),
  rename = require("gulp-rename"),
  sass = require("gulp-sass"),
  prefix = require("gulp-autoprefixer"),
  mincss = require("gulp-minify-css"),
  jshint = require("gulp-jshint"),
  babel = require("gulp-babel"),
  uglify = require("gulp-uglify"),
  cache = require("gulp-cache"),
  clean = require("gulp-clean"),
  notify = require("gulp-notify");

//PATHS
var paths = {
  css: {
    dev: "library/scss/",
    dist: "library/dist/css"
  },
  js: {
    dev: "library/js/",
    dist: "library/dist/js/"
  }
};

//TASKS

//css
gulp.task("css", function() {
  return gulp
    .src(paths.css.dev + "style.scss")
    .pipe(plumber())
    .pipe(sass({ style: "expanded" }))
    .pipe(
      prefix(
        "last 2 version",
        "safari 5",
        "ie 8",
        "ie 9",
        "opera 12.1",
        "ios 6",
        "android 4"
      )
    )
    .pipe(gulp.dest(paths.css.dist))

    .pipe(rename({ suffix: ".min" }))
    .pipe(mincss())
    .pipe(gulp.dest(paths.css.dist))

    .pipe(notify({ message: "wow, " + webtitle + " CSS taken care of!" }));
});

//js
// gulp.task("js", function() {
//   return gulp
//     .src([paths.js.dev + "libs/*.js", paths.js.dev + "*.js"])
//     .pipe(plumber())
//     .pipe(jshint())
//     .pipe(jshint.reporter("default"))
//     .pipe(concat("main.js"))
//     .pipe(gulp.dest(paths.js.dist))

//     .pipe(rename({ suffix: ".min" }))
//     .pipe(babel({ presets: ["es2015"] }))
//     .pipe(uglify())
//     .pipe(gulp.dest(paths.js.dist))

//     .pipe(
//       notify({
//         message: "sweet, " + webtitle + " js has been straightened out"
//       })
//     );
// });

//clean
gulp.task("clean", function() {
  return gulp
    .src([paths.css.dist, paths.js.dist], { read: false })
    .pipe(clean())
    .pipe(notify({ message: "Clean task complete, yo!" }));
});

//gulpfile
gulp.task("gulpfile", function() {
  return gulp
    .src("gulpfile.js")
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter("default"))
    .pipe(notify({ message: "Gulpfile task complete, yo!" }));
});

//watch
gulp.task("watch", function() {
  gulp.watch("gulpfile.js", ["gulpfile"]);

  gulp.watch(paths.css.dev + "**/*.scss", ["css"]);
  gulp.watch(paths.js.dev + "**/*.js", ["js"]);
});

//default
gulp.task("default", ["clean"], function() {
  gulp.start("css", "watch");
});
