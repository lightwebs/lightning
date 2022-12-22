export const searchItem = (
    id,
    title,
    link,
    categories,
    img,
    job_title,
    company,
    talk_heading,
    description,
    start_time,
    end_time,
    info
) => {
    let cats
    if (categories) {
        cats = categories
            .map((cat) => {
                return cat
            })
            .join(', ')
    }

    return /*html*/ `
    <div class="card group"
        title="${title}"
        data-id="${id}">
        
        <div class="grid p-4 rounded shadow-md md:p-6 md:grid-cols-5 lg:grid-cols-4 gap-y-6 gap-x-3 md:gap-x-6">
            <div class="overflow-hidden md:col-span-2 lg:col-span-1 card-image aspect-3/4">
            ${
                img
                    ? /* html */ `
                <img class='rounded object-cover h-full group-hover:scale-105 transition-transform duration-300' src="${img}"/> `
                    : ''
            }
            </div>

            <div class="flex flex-col md:col-span-3 card-body">
                <h3 class="mb-2">${title}</h3>
                <span class="text-base">
                    ${job_title ? job_title : ''}
                    ${company ? ' - ' + company : ''}
                </span>
                <div class="mb-2">
                    ${description ? description : ''}
                </div>
                
                <div class="flex mt-auto card-footer">
                    <div class="flex items-center mr-4 text-sm">
                        ${info ? info.join('') : ''}
                    </div>
                
                    <div class="flex items-center mr-4 text-sm">
                        ${
                            start_time
                                ? /* html */ `
                            <img class="mr-2" src="${liGlobal.templateDirectory}/src/assets/icons/clock.svg">
                            ${start_time}`
                                : ''
                        }
                        ${end_time ? ' - ' + end_time : ''}
                    </div>
                </div>
            </div>
        </div>
    </div>
`
}
