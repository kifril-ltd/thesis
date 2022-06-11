<template>
  <div class="form-container">
    <div class="form-signin">
      <form @submit.prevent="apply">
        <h1 class="h3 mb-3 fw-normal text-center">ИС ТЭК</h1>

        <div class="form-floating">
          <input
            v-model="email"
            name="login"
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
          <input
            v-model="password"
            name="password"
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Пароль</label>
        </div>

        <div class="checkbox mb-3">
          <energy-checkbox :isChecked="toggleFlag"> </energy-checkbox>
          <span @click="toggleRememberMe(!toggleFlag)" class="ms-2">Запомнить меня</span>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
      </form>
    </div>
  </div>
</template>

<script>
import { userSymbol, menuSymbol } from '@/store';
import EnergyCheckbox from '@/ui/energyCheckbox/EnergyCheckbox';

export default {
  name: 'UserLogin',
  components: { EnergyCheckbox },
  data: () => ({
    email: '',
    password: '',
    toggleFlag: false,
  }),
  inject: {
    userState: {
      from: userSymbol,
    },
    stateMenu: {
      from: menuSymbol,
    },
  },
  mounted() {
    if (this.user) this.$router.push({ name: 'home' });
  },
  methods: {
    async apply({ target }) {
      const formData = new FormData(target);
      const result = await this.userState.loginUser(formData);
      if (result) await Promise.all([this.stateMenu.fetchMenu(), this.$router.push({ name: 'home' })]);
    },
    toggleRememberMe(flag) {
      this.toggleFlag = flag;
    },
  },
  computed: {
    user() {
      return this.userState.state.user;
    },
  },
};
</script>

<style scoped>
.form-container {
  min-height: 100vh;
  height: 100%;
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type='email'] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type='password'] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
