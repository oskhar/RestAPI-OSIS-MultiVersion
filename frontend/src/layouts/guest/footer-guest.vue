<script setup>
import { FOOTER_MENU_ITEMS } from "@/constants";
import { RouterLink } from "vue-router";

const currentYear = new Date().getFullYear();
</script>

<template>
  <VFooter class="bg-white px-0 py-0 pt-10 d-flex flex-column">
    <VRow class="w-100">
      <VCol cols="12" md="9" class="px-5 mx-auto">
        <VRow class="d-flex justify-space-between">
          <VCol cols="12" md="6">
            <VRow>
              <VCol cols="3">
                <img src="/logosc.webp" class="w-100" />
              </VCol>
            </VRow>

            <VRow>
              <VCol
                v-for="menu in FOOTER_MENU_ITEMS"
                :key="menu.title"
                class="text-start"
                cols="12"
                sm="6"
                md="4"
                lg="3"
              >
                <h3 class="mb-2 text-primary text-h6 font-weight-bold">
                  {{ menu.title }}
                </h3>

                <ul class="footer-menu">
                  <li
                    v-for="item in menu.items"
                    :key="item.text"
                    class="footer-menu-item text-subtitle-1"
                  >
                    <RouterLink :to="item.route" class="text-secondary">
                      {{ item.text }}
                    </RouterLink>
                  </li>
                </ul>
              </VCol>
            </VRow>
          </VCol>

          <VCol cols="12" md="6" class="d-flex flex-column">
            <h3 class="text-h6 font-weight-bold text-primary">
              <VIcon>bx-pin</VIcon>
              Lokasi Kami
            </h3>
            <p class="mt-2">
              Jl. Jati Raya No.40, RT.6/RW.12, Cengkareng Tim., Kecamatan
              Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta
              11730
            </p>

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8805562094653!2d106.7371554755089!3d-6.146740760254739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7efbe49403b%3A0x43712d8c6eb104c9!2sSMA%20Negeri%2096%20Jakarta!5e0!3m2!1sid!2sid!4v1720985330153!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </VCol>
        </VRow>
      </VCol>
    </VRow>

    <VRow class="bg-primary mt-12 w-100 py-2">
      <VCol cols="12" md="9" class="px-5 mx-auto">
        <p class="text-center my-0">
          &copy; {{ currentYear }} OSIS SMAN 96 Jakarta
        </p>
      </VCol>
    </VRow>
  </VFooter>
</template>

<style scoped lang="scss">
.footer-menu {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  width: max-content;
}

.footer-menu-item {
  list-style: none;

  &:hover {
    text-decoration: underline;
  }
}
</style>
