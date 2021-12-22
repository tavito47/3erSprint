



<!-- RECHAZAR -->


<div class="modal fade" id="exampleModal2{{$rechazar}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Rechazo de Documentacion</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{url('rechazar')}}" enctype="multipart/form-data">
                                  @csrf
                                <div class="modal-body">
                                <input type="hidden" name="planificacion_id" value="{{$rechazar}}">
                                    
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Orden de cambios: {{$rechazar}}</label>
                                        <textarea class="form-control" id="message-text" rows="10" name="observacion"></textarea>
                                      </div>

                                      <div class="col-md">
                                        <label for="floatingSelectGrid">Correo</label>
                                        <input readonly type="text" class="form-control" value="{{@$correo}}" name="correo"> 
                                      
                                      </div>
                                  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>