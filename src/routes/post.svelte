<script>
let record ={
  name : 'mii',
  phone : ' 06 ....'
}
let name = 'me';
  function postSomething() {
      console.log('POST');
    fetch('postapi', {
      method: "POST",
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(record)
    });
  }
</script>

<h1>Post something here!</h1>
<input bind:value={record.name}>
<button on:click={postSomething}>Post!</button>
