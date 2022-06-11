<template>
  <div class="d-flex align-items-center justify-content-center align-content-center energy-background">
    <div data-toggle="tooltip" title="Выберите таблицу для просмотра">
      <energy-icon class="ms-3 me-3" width="500px" height="500px" icon="background-icon" />
    </div>
  </div>
</template>

<script>
import { EnergyIcon } from '@/ui';
export default {
  name: 'MainHome',
  components: { EnergyIcon },
};
</script>

<style scoped>
.energy-background {
  min-height: 100vh;
}
</style>
