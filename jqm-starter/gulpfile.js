var gulp = require("gulp");
var concat = require("gulp-concat");
var minify = require("gulp-minify");
 
var js = [
    "./node_modules/jquery/dist/jquery.js",
    "./events.js",
    "./node_modules/jquery-mobile/dist/jquery.mobile.js",
    "./app.js"
];
 
var css = [
    "./node_modules/jquery-mobile/dist/jquery.mobile.css"
];

var folders = [{
    from: "./node_modules/jquery-mobile/dist/images",
    to: "./public/css/"
}];

gulp.task("default", async function(){
    gulp.src(js)
        .pipe(concat("script.js"))
        .pipe(minify())
        .pipe(gulp.dest("./public/js/"));

    gulp.src(css)
        .pipe(concat("style.css"))
        .pipe(gulp.dest("./public/css/"));

    gulp.src(["./node_modules/jquery-mobile/dist/images/**/*.*"])
        .pipe(gulp.dest("./public/css/images"));
});

//gulp.watch(js, ["default"]);