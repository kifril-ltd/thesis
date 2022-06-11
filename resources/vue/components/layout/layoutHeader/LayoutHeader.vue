<template>
  <report-modal ref="reportWindow" />
  <header>
    <nav class="navbar navbar-light bg-light d-flex justify-content-between align-items-center" aria-label="breadcrumb">
      <div class="d-flex align-items-center">
        <div
          v-if="user"
          class="menu-button"
          data-bs-toggle="offcanvas"
          data-bs-target="#nav"
          aria-controls="offcanvasScrolling"
        >
          <energy-icon class="me-4 ms-4" width="20px" height="20px" icon="menu" />
        </div>
        <ol class="breadcrumb">
          <li v-if="user" class="breadcrumb-item">
            <router-link :to="{ name: 'home' }">Главная</router-link>
          </li>
          <template v-if="user">
            <li v-if="getLabel" class="breadcrumb-item active" aria-current="page"> {{ getLabel }}</li>
          </template>
        </ol>
      </div>

      <div class="user-action d-flex align-items-center">
        <button v-if="user" class="me-3 btn text-start">
          <div class="d-flex align-content-center align-items-center">
            Открыть карту
            <energy-icon class="ms-1" width="20px" height="20px" icon="map-location" />
          </div>
        </button>
        <div class="dropdown me-3" v-if="user">
          <button type="button" class="btn text-start dropdown-toggle" id="id" data-bs-toggle="dropdown">
            Администрирование
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="id">
            <li v-if="user">
              <!-- TODO href -->
              <a class="dropdown-item">
                <energy-icon class="ms-3 me-3" width="25px" height="25px" icon="user_management" />
                Управление пользователями
              </a>
              <!-- TODO href -->
              <a class="dropdown-item">
                <energy-icon class="ms-3 me-3" width="25px" height="25px" icon="rights_management" />
                Управление правами
              </a>
              <!-- TODO href -->
              <a class="dropdown-item">
                <energy-icon class="ms-3 me-3" width="25px" height="25px" icon="archiving_management" />
                Управление архивацией
              </a>
              <!-- TODO href -->
              <router-link to="/attr/management" class="dropdown-item">
                <energy-icon class="ms-3 me-3" width="25px" height="25px" icon="attribute_management" />
                Управление атрибутами
              </router-link>
            </li>
          </ul>
        </div>
        <router-link v-if="!user" class="me-4 btn text-start" :to="{ name: 'login' }">Авторизация</router-link>
        <template v-if="user">
          <router-link v-if="!toggleButton" class="me-4 btn text-start" :to="{ name: 'report' }"
            >Реляционный фильтр</router-link
          >
          <router-link v-if="toggleButton" class="me-4 btn text-start" :to="{ name: 'home' }">К таблицам</router-link>
        </template>

        <a
          href="https://www.stu.lipetsk.ru/struct/management/rectorat/pro-first/sub/cci/pk-uotek.html"
          class="me-4 btn text-start"
        >
          Документация
        </a>

        <button class="me-4 btn" @click="report"> Отчет </button>

        <div class="dropdown" v-if="user">
          <button type="button" class="btn text-start dropdown-toggle" id="id" data-bs-toggle="dropdown">
            {{ userName }}
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="id">
            <li v-if="user">
              <!-- TODO href -->
              <a class="dropdown-item">Профиль</a>
              <a @click="logout" class="dropdown-item">Выход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
import EnergyIcon from '@/ui/energyIcon/EnergyIcon.vue';
import { userSymbol, menuSymbol } from '@/store';
import EnergyButton from '@/ui/energyButton/EnergyButton';
import ReportModal from '@/components/layout/layoutHeader/ReportModal/ReportModal';

export default {
  name: 'LayoutHeader',
  components: {
    EnergyButton,
    EnergyIcon,
    ReportModal,
  },
  inject: {
    userState: {
      from: userSymbol,
    },
    stateMenu: {
      from: menuSymbol,
    },
  },
  computed: {
    user() {
      return this.userState.state.user;
    },
    toggleButton() {
      if (this.$route.name == 'table' || this.$route.name == 'home') return false;
      else return true;
    },
    getLabel() {
      if (this.$route.params.tableId && this.menu)
        return this.childrenMenu.find(item => item.structure_id === this.$route.params.tableId)?.caption ?? '';
      else return '';
    },
    menu() {
      return this.stateMenu.state.menu;
    },
    childrenMenu() {
      return this.stateMenu.allMenuElements;
    },
    userName() {
      return this.user?.first_name ?? 'Пользователь';
    },
  },
  methods: {
    async logout() {
      const result = await this.userState.logoutUser();
      if (result) await this.$router.push({ name: 'login' });
    },
    report() {
      this.$refs.reportWindow.openModal();
    },
  },
};
</script>

<style scoped>
dl,
ol,
ul {
  margin-bottom: 0 !important;
}

.navbar {
  padding: 1rem;
}

.menu-button {
  cursor: pointer;
}

ol li,
ol li a,
ul li a {
  font-weight: bold;
  text-decoration: none;
  cursor: pointer;
}

.btn {
  width: 100%;
  color: #000000;
  background-color: #ffffff;
  box-shadow: 0 0 10px lightgrey;
  font-weight: bold;
  white-space: nowrap;
}

.btn:focus {
  width: 100%;
  color: #0c63e4;
  background-color: #e7f1ff;
}

.dropdown-toggle::before {
  z-index: -1;
}
</style>
