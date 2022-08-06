<template>
  <div class="table-wrapper">
    <div
      class="
        table-wrapper__content
        table-collapse
        scrollbar-thin scrollbar-visible
      "
      data-simplebar="init"
    >
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              style="height: auto; overflow: hidden"
            >
              <div class="simplebar-content" style="padding: 0px">
                <table class="table table--lines">
                  <colgroup>
                    <col width="100px" />
                    <col width="20%" />
                    <col width="16%" />
                    <col />
                  </colgroup>
                  <thead class="table__header">
                    <tr class="table__header-row">
                      <th class="table__th-sort">
                        <span class="align-middle">Id</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Entity Title</span>
                      </th>
                      <th class="table__th-sort">
                        <span class="align-middle">Process By</span>
                      </th>
                      <th class="table__th-sort d-none d-sm-table-cell">
                        <span class="align-middle">Created At</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table__row">
                      <td class="table__td">1</td>
                      <td class="table__td">
                        <span class="text-grey">Sophia Hale</span>
                      </td>
                      <td class="table__td"><span>$2500</span></td>
                      <td class="table__td text-nowrap">
                        <span class="text-grey">12.07.2018</span> 10:00 PM
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: auto; height: 550px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar simplebar-visible"
          style="transform: translate3d(0px, 0px, 0px); display: none"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar simplebar-visible"
          style="transform: translate3d(0px, 0px, 0px); display: none"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
       name: 'entity-listing',
  data() {
    return {
        entitiestList:{}
    };
  },
  methods: {},
  computed: {},
};
</script>