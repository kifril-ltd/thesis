<template>
  <notification-wrapper />
  <layout-sprite />
  <energy-spinner v-if="isLoading" />
  <slot v-else></slot>
</template>

<script>
import NotificationWrapper from '@/components/layout/notificationWrapper/NotificationWrapper.vue';
import LayoutSprite from '@/components/layout/layoutSprite/LayoutSprite.vue';
import { EnergySpinner } from '@/ui';
import { userSymbol } from '@/store/user';

export default {
  name: 'LayoutWrapper',
  components: {
    LayoutSprite,
    NotificationWrapper,
    EnergySpinner,
  },
  data: () => ({
    isLoading: true,
  }),
  inject: {
    userState: {
      from: userSymbol,
    },
  },
  async created() {
    const result = await this.userState
      .fetchUser()
      .catch(async () => {
        await this.$router.push({ name: 'login' });
      })
      .finally(() => {
        this.isLoading = false;
        return false;
      });
    if (!result) await this.$router.push({ name: 'login' });
  },
};
</script>

<style scoped></style>
