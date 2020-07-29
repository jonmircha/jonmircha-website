export function humanDate(date) {
  return new Date(date)
    .toDateString()
    .slice(4)
    .replace("Jan", "Ene")
    .replace("Apr", "Abr")
    .replace("Aug", "Ago")
    .replace("Dec", "Dic");
}
