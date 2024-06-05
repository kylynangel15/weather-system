import { defineStore } from 'pinia';

export const useMainStore = defineStore('main', {
  state: () => ({
    google_api: null,
  }),
  actions: {
    setGoogleApi(api) {
      this.google_api = api;
    },
  },
});