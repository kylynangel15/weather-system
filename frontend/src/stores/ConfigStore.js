import { defineStore } from 'pinia';

export const useConfigStore = defineStore('config', {
  state: () => ({
    google_key: null,
  }),
  actions: {
    setGoogleApi(payload) {
      this.google_key = payload;
    },
  },
});