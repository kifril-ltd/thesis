<template>
  <section class="notification-wrapper">
    <div class="d-flex flex-column">
      <energy-notification
        v-for="(notification, index) in notifications"
        :key="`notification_${index}`"
        :text="notification.text"
        :caption="notification.caption"
        :type="notification.type"
      />
    </div>
  </section>
</template>

<script>
import { EnergyNotification } from '@/ui';
import { notificationSymbol } from '@/store';

export default {
  name: 'NotificationWrapper',
  components: { EnergyNotification },
  inject: {
    stateNotification: {
      from: notificationSymbol,
    },
  },
  computed: {
    notifications() {
      return this.stateNotification.state.notifications;
    },
  },
};
</script>

<style lang="scss" scoped>
.notification-wrapper {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 600px;
  z-index: 1000;
}
</style>
