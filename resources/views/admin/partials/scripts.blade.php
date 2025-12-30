
<script>
    document.addEventListener("DOMContentLoaded", () => {

        Livewire.hook('morph.updated', (el, component) => {
            mysuccess=document.querySelector('.my-success-alert');
            if(mysuccess){
                setTimeout(()=>{
                    mysuccess.style.display='none';

                },2000);
            }

        });

    });

    window.addEventListener('modalToggle', event => {
        const modalEl = document.getElementById('exampleModal');
        // Get the existing instance, or create one if not exists
        const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);

        if(modalEl.classList.contains('show')) {
            modal.hide(); // hide if modal is open
        } else {
            modal.show(); // show if modal is closed
        }
    });

    window.addEventListener('modalUpdate', event => {
        const modalEl = document.getElementById('updateCounter');
        // Get the existing instance, or create one if not exists
        const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);

        if(modalEl.classList.contains('show')) {
            modal.hide(); // hide if modal is open
        } else {
            modal.show(); // show if modal is closed
        }
    });


    window.addEventListener('updateSkillToggle', event => {


        $('#updateskill').modal('toggle');
    });
    window.addEventListener('deleteSkillToggle', event => {


        $('#deleteskill').modal('toggle');
    });

    window.addEventListener('showskilltoggle', event => {


        $('#showmodel').modal('toggle');
    });

    window.addEventListener('deleteSubscribeToggle', event => {


        $('#deleteSubscriber').modal('toggle');
    });
    window.addEventListener('createCountToggle', event => {


        $('#createCount').modal('toggle');
    });
    window.addEventListener('updateCounterToggle', event => {


        $('#updateCounter').modal('toggle');
    });
    window.addEventListener('deleteCounterToggle', event => {


        $('#deleteCounter').modal('toggle');
    });
    window.addEventListener('showMessageToggle', event => {


        $('#showMessage').modal('toggle');
    });
    window.addEventListener('deleteMessageToggle', event => {


        $('#deleteskill').modal('toggle');
    });

    window.addEventListener('updateSkillToggel', event => {


        $('#updateskill').modal('toggle');
    });
    window.addEventListener('deleteProjectToggle', event => {


        $('#deleteskill').modal('toggle');
    });

</script>
