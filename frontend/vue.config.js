const { defineConfig } = require('@vue/cli-service')
const publicDir = '../public';

module.exports = defineConfig({
  transpileDependencies: true,
  outputDir: publicDir,
  devServer: {
    port: process.env.PORT,
    host: process.env.DOMAIN_NAME,
    proxy: {
      '^/api': {
        target: process.env.BASE_URL,
        changeOrigin: true,
      },
    },
  },

  indexPath:
    process.env.NODE_ENV === "production"
      ? "../resources/views/index.blade.php"
      : "../resources/views/dev.blade.php",

  publicPath: ["staging", "production"].includes(process.env.NODE_ENV)
    ? `${process.env.ASSET_URL}/`
    : "/",
})
