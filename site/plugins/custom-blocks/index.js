panel.plugin("flaviazaganelli/blocks", {
  blocks: {
    link: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
      <input
        type="text"
        :placeholder="placeholder"
        :value="content.text"
        @input="update({ text: $event.target.value })"
      />
      `
    },
    download: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    }
  }
});