export const MENU_ITEMS = [
  { text: "Home", route: "/" },
  {
    text: "Layanan",
    childrens: [
      { text: "Screening Balita", route: "/layanan/screening-balita" },
      { text: "Screening Remaja", route: "/layanan/screening-remaja" },
      { text: "Resliting", route: "/layanan/remaja-peduling-stunting" },
      { text: "SiKambing", route: "/layanan/sikambing" },
    ],
  },
  { text: "Galery", route: "/guest-galery" },
  { text: "Berita", route: "/selengkapnya-card-beritaacara" },
  { text: "Tentang", route: "/guest-tentang" },
];

export const FOOTER_MENU_ITEMS = [
  {
    title: "Menu",
    items: [
      { text: "Home", route: "/" },
      { text: "Edukasi", route: "/selengkapnya-card-edukasi" },
      { text: "Berita", route: "/selengkapnya-card-beritaacara" },
      { text: "Tentang", route: "/guest-tentang" },
    ],
  },
  {
    title: "Layanan",
    items: [
      { text: "Screening Balita", route: "/layanan/screening-balita" },
      { text: "Screening Remaja", route: "/layanan/screening-remaja" },
      { text: "Resliting", route: "/layanan/remaja-peduling-stunting" },
      { text: "SiKambing", route: "/layanan/sikambing" },
    ],
  },
];
