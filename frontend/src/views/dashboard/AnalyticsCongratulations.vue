<script setup>
import { useTheme } from "vuetify";
import illustrationJohnDark from "@images/cards/illustration-john-dark.png";
import illustrationJohnLight from "@images/cards/illustration-john-light.png";

const { global } = useTheme();
const illustrationJohn = computed(() =>
  global.name.value === "dark" ? illustrationJohnDark : illustrationJohnLight
);
</script>

<template>
  <VCard class="text-center text-sm-start">
    <VRow no-gutters>
      <VCol cols="12" sm="8" order="2" order-sm="1">
        <VCardItem class="pb-3">
          <VCardTitle class="text-primary">
            Selamat datang di Dashboard
          </VCardTitle>
        </VCardItem>

        <VCardText>
          OSIS adalah organisasi resmi di tingkat sekolah menengah yang
          berfungsi untuk mengembangkan kemampuan siswa dalam bidang
          kepemimpinan, kerjasama, dan organisasi. Ini penting karena membentuk
          karakter siswa, memperkuat rasa tanggung jawab, dan meningkatkan
          keterampilan sosial serta manajemen mereka melalui berbagai kegiatan
          <br />
          <VBtn variant="tonal" class="mt-6" size="small"> Info Lanjutan </VBtn>
        </VCardText>
      </VCol>

      <VCol cols="12" sm="4" order="1" order-sm="2" class="text-center">
        <img
          :src="illustrationJohn"
          :height="$vuetify.display.xs ? '150' : '182'"
          :class="$vuetify.display.xs ? 'mt-6 mb-n2' : 'position-absolute'"
          class="john-illustration flip-in-rtl"
        />
      </VCol>
    </VRow>
  </VCard>
</template>

<style lang="scss" scoped>
.john-illustration {
  inset-block-end: -0.125rem;
  inset-inline-end: 3.5rem;
}
</style>
