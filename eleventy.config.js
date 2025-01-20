module.exports = function(eleventyConfig) {
    eleventyConfig.addWatchTarget("./sass/");
    eleventyConfig.setServerOptions({
        port: 8000
    });
    eleventyConfig.addPassthroughCopy('static');
    eleventyConfig.addPassthroughCopy(
        {'node_modules/@ibm/plex/IBM-Plex-Sans/fonts/complete/woff2/*.woff2': 'static/fonts'}
    );
    eleventyConfig.addPassthroughCopy(
        {'node_modules/@ibm/plex/IBM-Plex-Serif/fonts/complete/woff2/*.woff2': 'static/fonts'}
    );
    eleventyConfig.addPassthroughCopy(
        {'node_modules/@ibm/plex/IBM-Plex-Mono/fonts/complete/woff2/*.woff2': 'static/fonts'}
    );
    return {
        dir: {
            input: "views",
            includes: "../partials",
            layouts: "../layouts",
            output: "public"
        }
    }
};
