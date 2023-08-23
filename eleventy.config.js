module.exports = function(eleventyConfig) {
    eleventyConfig.addWatchTarget("./sass/");
    eleventyConfig.setServerOptions({
        port: 8000
    });
    return {
        dir: {
            input: "views",
            includes: "../partials",
            layouts: "../layouts",
            output: "public"
        }
    }
};
