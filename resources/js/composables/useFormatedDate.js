import { ref, watch } from 'vue';

export function useFormattedDate(dateString) {
  const formattedDate = ref('');

  const updateFormattedDate = (dateStr) => {
    if (dateStr) {
      const date = new Date(dateStr);
      formattedDate.value = date.toLocaleDateString("fr-FR", { day: '2-digit', month: 'long', year: 'numeric' });
    } else {
      formattedDate.value = '';
    }
  };

  // Initial update
  updateFormattedDate(dateString);

  // Watch for changes in the dateString
  watch(dateString, updateFormattedDate);

  return formattedDate;
}