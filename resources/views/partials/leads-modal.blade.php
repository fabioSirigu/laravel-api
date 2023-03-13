<div class="modal fade" id="deleteLead-{{$lead->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$lead->id}}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId-{{$lead->id}}">Delete lead</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        Stai per cancellare definitivamente un messaggio, sei sicuro?
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('admin.leads.destroy', $lead->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                    Conferma
                              </button>
                        </form>
                  </div>
            </div>
      </div>
</div>