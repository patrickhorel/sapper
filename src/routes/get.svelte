<script>
  import { onMount } from "svelte";
  let non = [];
  let gettingQuote = false;

  // onMount(() => {
  //   getRandomQuote();
  // });

  // async function getRandomQuote() {
  //   gettingQuote = true;
  //   // const res = await fetch("https://api.quotable.io/random");
  //   const res = await fetch("https://larbreetlevent.fr/get.php", {
  //   // const res = await fetch("/get.php", {
  //     method: "POST",
  //     headers: new Headers({
  //       "Content-Type": "application/x-www-form-urlencoded" 
  //     }),
  //     body: "ville=Céret&prenom=Patrick"
  //   });

  //   console.log("RES", res);
  //   const json = await res.json();
  //   console.log("JSON",json);
  //   // non = [...non, json];
  //   gettingQuote = false;
  // }

  let valuesGetted = null;
  async function getSomething() {
    console.log("Get something");
    const response = await fetch("/getapi");
    if (response.ok) {
       valuesGetted = await response.json();
    }
  }
</script>

<h1>Get something here!</h1>
<button on:click={getSomething}>Get something!</button>
{#if valuesGetted}
  {#each valuesGetted as { _id, name }}
    <div>
      <p>{name} à pour id : {_id}</p>
    </div>
  {/each}
{:else}
  <div>
    <p>Waiting... Get</p>
  </div>
{/if}
