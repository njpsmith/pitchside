var gulp = require("gulp"),
  minifycss = require("gulp-minify-css"),
  rename = require("gulp-rename"),
  sass = require("gulp-sass"),
  notify = require("gulp-notify"),
  autoprefixer = require("gulp-autoprefixer"),
  sourcemaps = require("gulp-sourcemaps");

gulp.task("default", ["scss", "watch"]);

gulp.task("scss", function() {
  return gulp
    .src("./library/scss/style.scss")
    .pipe(sass())
    .on(
      "error",
      notify.onError(function(error) {
        return (
          "An error occurred while compiling sass.\nLook in the console for details.\n" +
          error
        );
      })
    )
    .pipe(
      autoprefixer({
        cascade: false
      })
    )
    .pipe(gulp.dest("./library/dist/css/"))
    .pipe(minifycss())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("./library/dist/css/"))
    .pipe(notify({ message: "Styles task complete" }));
});

// Watch Files For Changes
gulp.task("watch", function() {
  gulp.watch("./library/scss/**/*.scss", ["scss"]);
});

var onError = function(err) {
  console.log("An error occurred:", err.message);
  this.emit("end");
};
