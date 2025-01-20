module.exports = function(eleventyConfig) {
    eleventyConfig.addWatchTarget("./sass/");
    eleventyConfig.setServerOptions({
        port: 8000
    });
    eleventyConfig.addPassthroughCopy('static');
    return {
        dir: {
            input: "views",
            includes: "../partials",
            layouts: "../layouts",
            output: "public"
        }
    }
};
